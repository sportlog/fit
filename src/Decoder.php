<?php
declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT;

use Exception;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\MessageList;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Sportlog\FIT\Profile\Profile;

/**
 * A decoder for FIT files.
 * For a documentation of the FIT protocol see https://developer.garmin.com/fit/protocol/
 * 
 * Current limitations:
 * - does not handle compress time stamp headers correctly
 * - ignores subfields
 * - no profile validation (allowed messages according to file type)
 * - ...and many more
 */
class Decoder
{
    const MESSAGE_TYPE_DATA = 'data';
    const MESSAGE_TYPE_DEFINITION = 'definition';
    const MESSAGE_TYPE_COMPRESSED_TIMESTAMP = 'compressed_timestamp';

    private LoggerInterface $logger;

    /**
     * Creates a new deocder instance.
     *
     * @param LoggerInterface|null $logger
     */
    public function __construct(?LoggerInterface $logger = null)
    {
        $this->logger = $logger ?? new NullLogger();
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
        $handle = fopen($file, 'rb');
        if ($handle === false) {
            throw new InvalidArgumentException("Unable to open file '{$file}'. Did you provide the correct path?");
        }
        $this->logger->info("************ START decoding of file '{$file}'");

        try {
            $reader = new IOReader($handle);
            $header = $this->getHeader($reader);
            $this->logger->info("Header: " . print_r($header, true));
            return $this->readMessages($header, $reader);
        } catch (Exception $ex) {
            $this->logger->error("Error while decoding", ['exception' => $ex]);
            throw $ex;
        } finally {
            fclose($handle);
            $this->logger->info("************ END decode");
        }
    }

    private function readMessages(array $header, IOReader $reader): MessageList
    {
        // Array to store all message definitions
        $messageTypeDefinitions = [];
        $records = new MessageList();
        while ($reader->getOffset() - $header['header_size'] < $header['data_size']) {
            // Read the record header
            $recordHeader = $this->nextRecordHeader($reader);
            $localMessagType = $recordHeader['local_message_type'];

            switch ($recordHeader['message_type']) {
                case self::MESSAGE_TYPE_COMPRESSED_TIMESTAMP:
                   throw new Exception('compressed timestamps are not implemented yet');

                case self::MESSAGE_TYPE_DEFINITION:
                    // definition message
                    $def =  $this->nextRecordDefinition($recordHeader['has_developer_data'], $reader);
                    $messageTypeDefinitions[$localMessagType] = $def;
                    break;

                case self::MESSAGE_TYPE_DATA:
                    // data message
                    if (!isset($messageTypeDefinitions[$localMessagType])) {
                        throw new Exception("No message definition for local message type '{$localMessagType}' found.");
                    }

                    $this->logger->info("Data for '{$localMessagType}'");
                    $records->addMessage($this->nextRecordData($messageTypeDefinitions[$localMessagType], $reader));
                    break;

                default:
                    throw new Exception('invalid message type in record header: ' . $recordHeader['message_type']);
            }
        }
        return $records;
    }

    /**
     * Creates the message and assigns the values for all fields in the
     * definition. Invalid values are not set 
     *
     * @param array $definition
     * @param IOReader $reader
     * @return Message
     */
    private function nextRecordData(array $definition, IOReader $reader): Message
    {
        // Create the message for the global message number
        $message = Profile::createMessage($definition['global_message_number']);
        foreach ($definition['field_definitions'] as $fieldDefinition) {
            $size = $fieldDefinition['size'];
            $fitBaseType = FitBaseType::fromType($fieldDefinition['base_type']);
            if (is_null($fitBaseType)) {
                // No valid base type; just read the data to advance the file pointer
                $reader->read($size);
                continue;
            }

            // The size indicates the size of the defined field in bytes. The size may be a 
            // multiple of the underlying FIT Base Type size indicating the field contains multiple 
            // elements represented as an array.
            $fitBaseTypeSize = $fitBaseType->getBytes();
            if (($size % $fitBaseTypeSize) !== 0) {
                throw new Exception('size must be a multiple of fit-base-type size');
            }

            $order = $definition['byte_order'];
            $fieldValue = null;

            // For String and Byte data type always read all bytes at once.
            // All other types handle multiple values as arrays of their underlying FIT base type.
            switch ($fieldDefinition['base_type']) {
                case FitBaseType::STRING:
                    $fieldValue = $reader->readString8($size);
                    break;

                case FitBaseType::BYTE:
                    $fieldValue = $reader->read($size);
                    break;

                default:
                    $numElements = $size / $fitBaseType->getBytes();
                    if ($numElements === 1) {
                        $fieldValue = $this->readValue($fitBaseType, $fieldDefinition, $order, $reader);
                    } else {
                        for ($i = 0; $i < $numElements; $i++) {
                            $tmpValue = $this->readValue($fitBaseType, $fieldDefinition, $order, $reader);
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
                $message->setFieldValue($fieldDefinition['field_definition_number'], $fieldValue, $fitBaseType);
            }
        }

        return $message;
    }

    /**
     * Read the value according to it's base type.
     *
     * @param FitBaseTypeDefinition $fitBaseType
     * @param array $fieldDefinition
     * @param integer $order
     * @param IOReader $reader
     * @return mixed Returns the read value, or null if the value is invalid.
     */
    private function readValue(FitBaseTypeDefinition $fitBaseType, array $fieldDefinition, int $order, IOReader $reader): mixed
    {
        $bigEndian = $order === IOReader::BIG_ENDIAN_ORDER;
        $value = null;
        switch ($fieldDefinition['base_type']) {
            case FitBaseType::SINT8:
                $value = $reader->readInt8();
                break;

            case FitBaseType::ENUM:
            case FitBaseType::UINT8:
            case FitBaseType::UINT8Z:
                $value = $reader->readUInt8();
                break;

            case FitBaseType::SINT16:
                $value = $reader->readInt16($order);
                break;

            case FitBaseType::UINT16:
            case FitBaseType::UINT16Z:
                $value = $reader->readUInt16($order);
                break;

            case FitBaseType::SINT32:
                $value = $reader->readInt32($order);
                break;

            case FitBaseType::UINT32:
            case FitBaseType::UINT32Z:
                $value = $reader->readUInt32($order);
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
                throw new Exception(sprintf('unknown fit base type "%s".', $fieldDefinition['base_type']));
        }

        return !$fitBaseType->isInvalid($value) ? $value : null;
    }

    private function nextRecordDefinition(bool $hasDeveloperData, IOReader $reader): array
    {
        $reader->readUInt8();    // Reserverd; read it to advance file pointer
        // Architecture Type
        // 0: Definition and Data Messages are Little Endian
        // 1: Definition and Data Message are Big Endian
        $endianness = $reader->readUInt8() ? IOReader::BIG_ENDIAN_ORDER : IOReader::LITTLE_ENDIAN_ORDER;
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

        if ($hasDeveloperData) {
            // Developer data is present as defined in the header
            // Number of Self Descriptive fields in the Data Message
            $devFieldNumber =  $reader->readInt8();
            $devFieldDefinitions = [];
            for ($i = 0; $i < $devFieldNumber; $i++) {
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
            'field_definitions' => $fieldDefinitions
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

    private function getHeader(IOReader $reader): array
    {
        $headerSize = $reader->readUInt8();

        $header = [
            'header_size' => $headerSize,
            'protocol_version' => $reader->readUInt8(),
            'profile_version' => $reader->readUInt16(),
            'data_size' => $reader->readUInt32LE(),
            'data_type' => $reader->readString8(4)
        ];

        if ($headerSize > 12) {
            $header['crc'] = $reader->readUInt16LE();
        }

        return $header;
    }
}
