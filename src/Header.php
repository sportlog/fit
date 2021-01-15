<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT;

use Exception;
use InvalidArgumentException;

/**
 * The FIT header
 */
final class Header
{
    const HEADER_SIZE_WITH_CRC = 14;
    const HEADER_SIZE_WITHOUT_CRC = 12;
    const DATA_TYPE = '.FIT';

    public function __construct(
        private int $headerSize,
        private int $protocolVersion,
        private int $profileVersion,
        private int $dataSize,
        private string $dataType,
        private int $crc
    ) {
        if ($headerSize !== self::HEADER_SIZE_WITH_CRC && $headerSize !== self::HEADER_SIZE_WITHOUT_CRC) {
            throw new InvalidArgumentException('Invalid header size');
        }
    }

    /**
     * Create the header by reading from the stream.
     *
     * @param IOReader $reader
     * @return self
     */
    public static function fromStream(IOReader $reader): self
    {
        try {
            $headerSize = $reader->readUInt8();

            return new self(
                $headerSize,
                $reader->readUInt8(),
                $reader->readUInt16(),
                $reader->readUInt32LE(),
                $reader->readString8(4),
                $headerSize === self::HEADER_SIZE_WITH_CRC ? $reader->readUInt16LE() : 0x0000
            );
        } catch (Exception $ex) {
            throw new FitException('Invalid FIT header', previous: $ex);
        }
    }

    /**
     * Gets the header size.
     *
     * @return integer
     */
    public function getHeaderSize(): int {
        return $this->headerSize;
    }

    /**
     * Gets the data size.
     *
     * @return integer
     */
    public function getDataSize(): int {
        return $this->dataSize;
    }

    /**
     * Gets the Crc.
     *
     * @return integer
     */
    public function getCrc(): int {
        return $this->crc;
    }

    /**
     * Determines whether the header is valid.
     *
     * @return boolean
     */
    public function isValid(): bool
    {
        return $this->dataType === self::DATA_TYPE;
    }
}
