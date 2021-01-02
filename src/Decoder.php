<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT;

use Exception;
use FIT\Message\Message;
use InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use FIT\Message\MessageFactory;
use FIT\Message\MessageNumber;

class Decoder
{
    const MESSAGE_TYPE_DATA = 'data';
    const MESSAGE_TYPE_DEFINITION = 'definition';

    private LoggerInterface $logger;
    private array $messageTypeDefinitions = [];

    public function __construct(?LoggerInterface $logger = null)
    {
        $this->logger = $logger ?? new NullLogger();
    }

    public function read(string $file): array
    {
        if (!file_exists($file)) {
            throw new InvalidArgumentException("invalid file {$file} provided");
        }

        $this->logger->info("************ START decoding of file '{$file}'");
        $handle = fopen($file, 'rb');
        try {
            $reader = new IOReader($handle);
            $header = $this->getHeader($reader);
            $this->logger->info("Header: " . print_r($header, true));
            return $this->readRecords($header, $reader);
        } catch (Exception $ex) {
            $this->logger->error("Error while decoding", ['exception' => $ex]);
            throw $ex;
        } finally {
            fclose($handle);
            $this->logger->info("************ END decode");
        }
    }

    private function readRecords(array $header, IOReader $reader): array
    {
        $records = [];
        while ($reader->getOffset() - $header['header_size'] < $header['data_size']) {
            $recordHeader = $this->nextRecordHeader($reader);
            $localMessagType = $recordHeader['local_message_type'];

            switch ($recordHeader['message_type']) {
                case self::MESSAGE_TYPE_DEFINITION:
                    // definition message
                    $def =  $this->nextRecordDefinition($recordHeader, $reader);
                    $this->messageTypeDefinitions[$localMessagType] = $def;
                    break;

                case self::MESSAGE_TYPE_DATA:
                    $records[] = $this->nextRecordData($localMessagType, $reader);
                    break;

                default:
                    throw new Exception('invalid message type in record header: ' . $recordHeader['message_type']);
            }
        }
        return $records;
    }

    private function nextRecordData(int $localMessagType, IOReader $reader): Message
    {
        if (!isset($this->messageTypeDefinitions[$localMessagType])) {
            throw new Exception("No message definition for local message type '{$localMessagType}' found.");
        }

        $definition = $this->messageTypeDefinitions[$localMessagType];
        // $this->logger->info($reader->getOffset() . " :" . $recordHeader['message_type'] . " '{$localMessagType}', " . $definition['global_message_number']);
        
        // Assoociative array with the field definition number as key
        // and it's decoded value.
        $fieldValues = [];
        $fieldTypes = [];
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

            // Use the field definition number as index and assign the value.
            // The message factory will create the appropriate message according to the
            // global message number and assign the values to the created message.
            $order = $definition['byte_order'];
            if ($size === $fitBaseTypeSize || $fieldDefinition['base_type'] === FitBaseType::BYTE || $fieldDefinition['base_type'] === FitBaseType::STRING) {
                $fieldValues[$fieldDefinition['field_definition_number']] = $this->readValue($fieldDefinition, $order, $reader);
            } else {
                $multipleFieldValues = [];
                $tmpSize = $size;
                while ($tmpSize >= $fitBaseTypeSize) {
                    $multipleFieldValues[] = $this->readValue($fieldDefinition, $order, $reader);
                    $tmpSize -= $fitBaseTypeSize;
                }
                $fieldValues[$fieldDefinition['field_definition_number']] = $multipleFieldValues;
            }
            $fieldTypes[$fieldDefinition['field_definition_number']] = $fitBaseType;
        }

        $message = MessageFactory::create($definition['global_message_number'], $fieldValues, $fieldTypes);
        $this->logger->info("Data for '{$localMessagType}'");

        return $message;
    }

    private function readValue(array $fieldDefinition, int $order, IOReader $reader): mixed
    {
        $bigEndian = $order === IOReader::BIG_ENDIAN_ORDER;
        switch ($fieldDefinition['base_type']) {
            case FitBaseType::SINT8:
                return $reader->readInt8();

            case FitBaseType::ENUM:
            case FitBaseType::UINT8:
            case FitBaseType::UINT8Z:
                return $reader->readUInt8();

            case FitBaseType::SINT16:
                return $reader->readInt16($order);

            case FitBaseType::UINT16:
            case FitBaseType::UINT16Z:
                return $reader->readUInt16($order);

            case FitBaseType::STRING:
                return $reader->readString8($fieldDefinition['size']);

            case FitBaseType::SINT32:
                return $reader->readInt32($order);

            case FitBaseType::UINT32:
            case FitBaseType::UINT32Z:
                return $reader->readUInt32($order);

            case FitBaseType::FLOAT32:
                return $bigEndian ? $reader->readFloatBE() : $reader->readFloatLE();

            case FitBaseType::SINT64:
                return $bigEndian ? $reader->readInt64BE() : $reader->readInt64LE();

            case FitBaseType::UINT64:
            case FitBaseType::UINT64Z:
            case FitBaseType::FLOAT64:
                return $bigEndian ? $reader->readDoubleBE() : $reader->readDoubleLE();

            case FitBaseType::BYTE:
                return $reader->read($fieldDefinition['size']);

            default:
                throw new Exception(sprintf('unknown fit base type "%s"', $fieldDefinition['base_type']));
        }
    }

    private function nextRecordDefinition(array $recordHeader, IOReader $reader): array
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

        // $baseTypeDef = BaseTypes::fromType($fieldBaseTypeNumber);
        if ($recordHeader['has_developer_data']) {
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
                'message_type' => self::MESSAGE_TYPE_DATA,
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
