<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT;

use DateTime;
use Exception;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\MessageList;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Messages\DeveloperDataIdMessage;
use Sportlog\FIT\Profile\Messages\FieldDescriptionMessage;
use Sportlog\FIT\Profile\MessageFactory;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * A decoder for FIT files.
 * For a documentation of the FIT protocol see https://developer.garmin.com/fit/protocol/
 * 
 * Current limitations:
 * - does not handle compress time stamp headers correctly
 * - ignores subfields
 * - no profile validation (allowed messages according to file type)
 */
class Decoder
{
    const MESSAGE_TYPE_DATA = 'data';
    const MESSAGE_TYPE_DEFINITION = 'definition';
    const MESSAGE_TYPE_COMPRESSED_TIMESTAMP = 'compressed_timestamp';
    const HEADER_SIZE_WITH_CRC = 14;
    const COMPRESSED_TIME_MASK = 0x1F;

    /**
     * Ctor
     * It is intentionally to make the logger nullable (and not to use
     * NullLogger by default) to save time by not generating the log
     * messages at all.
     * 
     * @param LoggerInterface $logger The logger to write to, or null
     * if logging is disabled.
     */
    public function __construct(private ?LoggerInterface $logger = null)
    {
    }

    /**
     * Reads the file and returns the decoded messages.
     *
     * @param string $file
     * @return MessageList
     * @throws Exception 
     */
    public function read(string $file): MessageList
    {
        $handle = @fopen($file, 'rb');
        if ($handle === false) {
            throw new InvalidArgumentException("Unable to open file '{$file}'. Did you provide the correct path?");
        }

        try {
            return $this->readMessages(new IOReader($handle));
        } catch (FitException $fex) {
            $this->logger?->error('Invalid FIT file', ['exception' => $fex]);
            throw $fex;
        } catch (Exception $ex) {
            $this->logger?->error('Technical error while decoding', ['exception' => $ex]);
            throw $ex;
        } finally {
            fclose($handle);
        }
    }

    private function readMessages(IOReader $reader): MessageList
    {
        $header = Header::fromStream($reader);
        if (!$header->isValid()) {
            throw new FitException('File has no valid FIT header');
        }

        $timestamp = 0;
        $lastTimeOffset = 0;

        // Array to store all message definitions
        $messageTypeDefinitions = [];
        $messages = new MessageList();
        while ($reader->getOffset() - $header->getHeaderSize() < $header->getDataSize()) {
            // Read the record header
            $recordHeader = $this->nextRecordHeader($reader);
            $localMessageType = $recordHeader['local_message_type'];
            $this->logger?->info(sprintf('%s: %s', $recordHeader['message_type'], $localMessageType));

            switch ($recordHeader['message_type']) {
                case self::MESSAGE_TYPE_COMPRESSED_TIMESTAMP:
                    $timestamp = ($recordHeader['time_offset'] - $lastTimeOffset) & self::COMPRESSED_TIME_MASK;
                    $lastTimeOffset = $recordHeader['time_offset'];
                    break;

                case self::MESSAGE_TYPE_DEFINITION:
                    // definition message
                    $def =  $this->nextRecordDefinition($recordHeader['has_developer_data'], $reader);
                    $messageTypeDefinitions[$localMessageType] = $def;
                    break;

                case self::MESSAGE_TYPE_DATA:
                    // data message
                    if (!isset($messageTypeDefinitions[$localMessageType])) {
                        throw new FitException("No message definition for local message type '{$localMessageType}' found.");
                    }

                    $message = $this->nextRecordData($messageTypeDefinitions[$localMessageType], $reader, $messages);
                    $messageTimestamp = $message->getFieldValue('Timestamp');
                    if ($messageTimestamp !== null) {
                        /** @var DateTime $timestamp */
                        $timestamp = $messageTimestamp;
                        $lastTimeOffset = $timestamp->getTimestamp() & self::COMPRESSED_TIME_MASK;
                    }
                    $messages->addMessage($message);
                    break;

                default:
                    throw new FitException('invalid message type in record header: ' . $recordHeader['message_type']);
            }
        }
        return $messages;
    }

    /**
     * Creates the message and assigns the values for all fields in the
     * definition. Invalid values are not set 
     *
     * @param array $definition
     * @param IOReader $reader
     * @return Message
     */
    private function nextRecordData(array $definition, IOReader $reader, MessageList $messages): Message
    {
        // Create the message for the global message number
        $message = MessageFactory::createMessage($definition['global_message_number']);
        $bigEndian = $definition['byte_order'] === IOReader::BIG_ENDIAN_ORDER;

        foreach ($definition['field_definitions'] as $fieldDefinition) {
            $this->assignMessageValue(
                $fieldDefinition['field_definition_number'],
                $fieldDefinition['base_type'],
                $fieldDefinition['size'],
                $bigEndian,
                $message,
                $reader
            );
        }

        foreach ($definition['developer_field_definitions'] as $devFieldDefinition) {
            $field = $this->createDeveloperField($devFieldDefinition['data_index'], $devFieldDefinition['field_definition_number'], $messages, $message);
            $message->addField($field);
            $this->assignMessageValue(
                $field->getNumber(),
                $field->getType(),
                $devFieldDefinition['size'],
                $bigEndian,
                $message,
                $reader
            );
        }

        return $message;
    }

    private function assignMessageValue(int $fieldNumber, int $baseType, int $size, bool $bigEndian, Message $message, IOReader $reader): void
    {
        $fitBaseType = FitBaseType::fromType($baseType);
        if ($fitBaseType === null) {
            // No valid base type; just read the data to advance the file pointer
            $reader->read($size);
            return;
        }

        // The size indicates the size of the defined field in bytes. The size may be a 
        // multiple of the underlying FIT Base Type size indicating the field contains multiple 
        // elements represented as an array.
        $fitBaseTypeSize = $fitBaseType->getBytes();
        if (($size % $fitBaseTypeSize) !== 0) {
            throw new FitException('size must be a multiple of fit-base-type size');
        }

        $fieldValue = null;

        // For String and Byte data type always read all bytes at once.
        // All other types handle multiple values as arrays of their underlying FIT base type.
        switch ($baseType) {
            case FitBaseType::STRING:
                $fieldValue = $reader->readString8($size);
                break;

            case FitBaseType::BYTE:
                $fieldValue = $reader->read($size);
                break;

            default:
                $numElements = $size / $fitBaseType->getBytes();
                if ($numElements === 1) {
                    $fieldValue = $this->readValue($fitBaseType, $baseType, $bigEndian, $reader);
                } else {
                    for ($i = 0; $i < $numElements; $i++) {
                        $tmpValue = $this->readValue($fitBaseType, $baseType, $bigEndian, $reader);
                        if ($tmpValue !== null) {
                            if ($fieldValue === null) {
                                $fieldValue = [];
                            }
                            $fieldValue[] = $tmpValue;
                        }
                    }
                }
                break;
        }

        if ($fieldValue !== null) {
            $message->setFieldValue($fieldNumber, $fieldValue, $fitBaseType);
        }
    }

    /**
     * Read the value according to it's base type.
     *
     * @param FitBaseTypeDefinition $fitBaseType
     * @param int $baseType
     * @param bool $bigEndian Indicates if architecture is Big Endian. Little Endian otherwise.
     * @param IOReader $reader
     * @return mixed Returns the read value, or null if the value is invalid.
     */
    private function readValue(FitBaseTypeDefinition $fitBaseType, int $baseType, bool $bigEndian, IOReader $reader): mixed
    {
        $value = null;
        switch ($baseType) {
            case FitBaseType::SINT8:
                $value = $reader->readInt8();
                break;

            case FitBaseType::ENUM:
            case FitBaseType::UINT8:
            case FitBaseType::UINT8Z:
                $value = $reader->readUInt8();
                break;

            case FitBaseType::SINT16:
                $value = $bigEndian ? $reader->readInt16BE() : $reader->readInt16LE();
                break;

            case FitBaseType::UINT16:
            case FitBaseType::UINT16Z:
                $value = $bigEndian ? $reader->readUInt16BE() : $reader->readUInt16LE();
                break;

            case FitBaseType::SINT32:
                $value = $bigEndian ? $reader->readInt32BE() : $reader->readInt32LE();
                break;

            case FitBaseType::UINT32:
            case FitBaseType::UINT32Z:
                $value = $bigEndian ? $reader->readUInt32BE() : $reader->readUInt32LE();
                break;

            case FitBaseType::FLOAT32:
                $value = $bigEndian ? $reader->readFloatBE() : $reader->readFloatLE();
                break;

            case FitBaseType::SINT64:
                $value = $bigEndian ? $reader->readInt64BE() : $reader->readInt64LE();
                break;

            case FitBaseType::UINT64:
            case FitBaseType::UINT64Z:
            case FitBaseType::FLOAT64:
                $value = $bigEndian ? $reader->readDoubleBE() : $reader->readDoubleLE();
                break;

            case FitBaseType::STRING:
            case FitBaseType::BYTE:
                throw new Exception("Base types 'String|Byte' must be handled separately");

            default:
                throw new Exception(sprintf('unknown fit base type "%s".', $baseType));
        }

        return !$fitBaseType->isInvalid($value) ? $value : null;
    }

    private function nextRecordDefinition(bool $hasDeveloperData, IOReader $reader): array
    {
        $reader->readUInt8();    // Reserverd; read it to advance file pointer
        // Architecture Type
        // 0: Definition and Data Messages are Little Endian
        // 1: Definition and Data Message are Big Endian
        $endianness = $reader->readUInt8() === 1 ? IOReader::BIG_ENDIAN_ORDER : IOReader::LITTLE_ENDIAN_ORDER;
        // 0:65535 – Unique to each message; Endianness of this 2 Byte value is defined in the Architecture byte
        $globalMsgNumber = $reader->readUInt16($endianness);
        // Number of fields in the Data Message
        $numberOfFields = $reader->readUInt8();

        $fieldDefinitions = [];
        for ($i = 0; $i < $numberOfFields; $i++) {
            // Field Definition, 3 Bytes (per Field)
            $fieldNumber = $reader->readUInt8();
            $fieldSize = $reader->readUInt8();

            // Bits of the baseType byte:
            // 7	Endian Ability	0 - for single byte data, 1 - if base type has endianness (i.e. base type is 2 or more bytes)
            // 5–6	Reserved	Reserved
            // 0–4	Base Type Number	Number assigned to Base Type (provided in SDK)
            $fieldBaseType = $reader->readUInt8();
            $fieldDefinitions[] = [
                'field_definition_number' => $fieldNumber,
                'size' => $fieldSize,
                'base_type' => $fieldBaseType
            ];
        }

        $devFieldDefinitions = [];
        if ($hasDeveloperData) {
            // Developer data is present as defined in the header
            // Number of Self Descriptive fields in the Data Message
            $devFieldsCount =  $reader->readInt8();
            for ($i = 0; $i < $devFieldsCount; $i++) {
                $devFieldNumber = $reader->readUInt8();
                $devFieldSize = $reader->readUInt8();
                $devDataIndex = $reader->readUInt8();

                $devFieldDefinitions[] = [
                    'field_definition_number' => $devFieldNumber,
                    'size' => $devFieldSize,
                    'data_index' => $devDataIndex
                ];
            }
        }

        return [
            'byte_order' => $endianness,
            'global_message_number' => $globalMsgNumber,
            'number_of_fields' => $numberOfFields,
            'field_definitions' => $fieldDefinitions,
            'developer_field_definitions' => $devFieldDefinitions
        ];
    }

    /**
     * The Record Header is a one byte bit field. There are actually two types of record headers: 
     * normal header and compressed timestamp header. The header type is indicated in the most 
     * significant bit (msb) of the record header. The normal header identifies whether the record
     * is a definition or data message, and identifies the local message type. A compressed timestamp
     * header is a special compressed header that may also be used with some local data messages to 
     * allow a compressed time format.
     */
    private function nextRecordHeader(IOReader $reader): array
    {
        $byte = $reader->readUInt8();

        if (($byte >> 7) & 1) {     // bit shift to the right by 7; checks the msb
            // if the msb bit is set the record is a compressed timestamp header
            return [
                'header_type' => 'compressed timestamp',
                'message_type' => self::MESSAGE_TYPE_COMPRESSED_TIMESTAMP,
                'local_message_type' => ($byte >> 5) & 3,  // Bits 5-6, Value 0-3
                'time_offset' =>  $byte & 31,  // Bits 0-4, Value 0-31
                'has_developer_data' => false
            ];
        } else {
            // If the msb is not set: this is a normal header
            return [
                'header_type' => 'normal',
                'message_type' => ($byte >> 6) & 1 ? self::MESSAGE_TYPE_DEFINITION : self::MESSAGE_TYPE_DATA,
                'local_message_type' => $byte & 15,    // Bits 0-3, Value 0-15,
                'has_developer_data' => (($byte >> 5) & 1) === 1
            ];
        }
    }

    /**
     * Gets the developer field definition
     *
     * @param MessageList $messages
     * @param integer $developerDataIndex
     * @param integer $fieldDefinitionNumber
     * @return FieldDescriptionMessage
     * @throws FitException
     */
    private function getDeveloperFieldDescription(int $developerDataIndex, int $fieldDefinitionNumber, MessageList $messages): FieldDescriptionMessage
    {
        $dataIdMessages = $messages->getMessages(MesgNum::DEVELOPER_DATA_ID);
        foreach ($dataIdMessages as $message) {
            /** @var DeveloperDataIdMessage $message */
            if ($message->getDeveloperDataIndex() === $developerDataIndex) {
                $fieldDescMessages = $messages->getMessages(MesgNum::FIELD_DESCRIPTION);
                foreach ($fieldDescMessages as $fieldDescMessage) {
                    /** @var FieldDescriptionMessage $fieldDescMessage */
                    if (
                        $fieldDescMessage->getDeveloperDataIndex() === $developerDataIndex &&
                        $fieldDescMessage->getFieldDefinitionNumber() === $fieldDefinitionNumber
                    ) {
                        return $fieldDescMessage;
                    }
                }
                throw new FitException("no field description message found for field definition number '{$fieldDefinitionNumber}'");
            }
        }

        throw new FitException("no developer data id message found for index '{$developerDataIndex}'");
    }

    private function createDeveloperField(int $developerDataIndex, int $fieldDefinitionNumber, MessageList $messages, Message $message): Field
    {
        $descMessage = $this->getDeveloperFieldDescription($developerDataIndex, $fieldDefinitionNumber, $messages);
        if ($descMessage->getNativeFieldNum() !== null) {
            $field = $message->getField($descMessage->getNativeFieldNum());
            if ($field === null) {
                throw new FitException(sprintf('invalid native field number %s', $descMessage->getNativeFieldNum()));
            }
            if ($field->getType() !== $descMessage->getFitBaseTypeId()) {
                throw new FitException(sprintf(
                    'mismatch between base type in dev field (%s) and base type of native field (%s)',
                    $descMessage->getFitBaseTypeId(),
                    $field->getType()
                ));
            }
            // Developer Fields that override native FIT fields shall preserve the units defined for that field in 
            // the Profile.xlsx document. Scaling and offset defined in Profile.xlsx for the native data fields shall
            // not be applied to the developer data field. Instead, the developer data field shall be logged with full 
            // precision and resolution using the appropriate base data type.
            return new Field(
                $descMessage->getFieldName() ?? throw new FitException('dev field description is missing'),
                $descMessage->getNativeFieldNum(), // equivalent to $field->getNumber()
                $field->getType(),
                Field::DEFAULT_SCALE,
                Field::DEFAULT_OFFSET,
                $field->getUnits(),
                $field->getAccumulated(),
                $field->getProfileType()
            );
        } else {
            return new Field(
                $descMessage->getFieldName() ?? throw new FitException('dev field description is missing'),
                crc32($descMessage->getFieldName()),
                $descMessage->getFitBaseTypeId() ?? throw new FitException('dev field base type is missing'),
                $descMessage->getScale() ?? Field::DEFAULT_SCALE,
                $descMessage->getOffset() ?? Field::DEFAULT_OFFSET,
                $descMessage->getUnits() ?? '',
                false,
                ProfileType::BYTE
            );
        }
    }
}
