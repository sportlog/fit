<?php
declare(strict_types=1);

/**
 * FIT decoder
 *
 * The bigger part of this code is taken and modified from
 * Zend_Io_Reader, therefore this copyright notice.
 * 
 * Copyright (c) 2005-2020, Zend, a Rogue Wave Company. All rights reserved.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND 
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED 
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. 
 * IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, 
 * INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 * NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA,
 * OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF 
 * LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE 
 * OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
 * OF THE POSSIBILITY OF SUCH DAMAGE.
 */

namespace Sportlog\FIT;

use Exception;
use InvalidArgumentException;

class IOReader
{
    const MACHINE_ENDIAN_ORDER = 0;
    const LITTLE_ENDIAN_ORDER  = 1;
    const BIG_ENDIAN_ORDER     = 2;

    /**
     * The endianess of the current machine.
     *
     * @var integer
     */
    private static $_endianess = 0;

    /**
     * The resource identifier of the stream.
     *
     * @var resource|null
     */
    private $_fd = null;

    /**
     * Constructs the Zend_Io_Reader class with given open file descriptor.
     *
     * @param resource $fd The file descriptor.
     * @throws Exception if given file descriptor is not valid
     */
    public function __construct($fd)
    {
        if (!is_resource($fd) || !in_array(get_resource_type($fd), array('stream'))) {
            throw new Exception('Invalid resource type (only resources of type stream are supported)');
        }

        $this->_fd = $fd;
    }

    /**
     * Closes the stream. Once a stream has been closed, further calls to read
     * methods will throw an exception. Closing a previously-closed stream,
     * however, has no effect.
     *
     * @return void
     */
    public function close(): void
    {
        if ($this->_fd !== null) {
            @fclose($this->_fd);
            $this->_fd = null;
        }
    }

    /**
     * Checks whether there is more to be read from the stream. Returns
     * <var>true</var> if the end has not yet been reached; <var>false</var>
     * otherwise.
     *
     * @return boolean
     * @throws Exception if an I/O error occurs
     */
    public function available(): bool
    {
        return !feof($this->_fd);
    }

    /**
     * Returns the current point of operation.
     *
     * @return integer
     * @throws Exception if an I/O error occurs
     */
    public function getOffset(): int
    {
        if ($this->_fd === null) {
            throw new Exception('Cannot operate on a closed stream');
        }
        return ftell($this->_fd);
    }

    /**
     * Reads <var>length</var> amount of bytes from the stream.
     *
     * @param integer $length The amount of bytes.
     * @return string
     * @throws Exception if <var>length</var> attribute is negative or
     *  if an I/O error occurs
     */
    public function read($length): string
    {
        if ($length < 0) {
            throw new Exception('Length cannot be negative');
        }
        if ($length == 0) {
            return '';
        }
        if ($this->_fd === null) {
            throw new Exception('Cannot operate on a closed stream');
        }
        return fread($this->_fd, $length);
    }

    /**
     * Reads 1 byte from the stream and returns binary data as an 8-bit integer.
     *
     * @return integer
     * @throws Exception if an I/O error occurs
     */
    public final function readInt8(): int
    {
        $ord = ord($this->read(1));
        if ($ord > 127) {
            return -$ord - 2 * (128 - $ord);
        } else {
            return $ord;
        }
    }

    /**
     * Reads 1 byte from the stream and returns binary data as an unsigned 8-bit
     * integer.
     *
     * @return integer
     * @throws Exception if an I/O error occurs
     */
    public final function readUInt8(): int
    {
        return ord($this->read(1));
    }

    /**
     * Returns machine endian ordered binary data as signed 16-bit integer.
     *
     * @param string $value The binary data string.
     * @return integer
     */
    private function _fromInt16($value)
    {
        list(, $int) = unpack('s*', $value);
        return $int;
    }

    /**
     * Reads 2 bytes from the stream and returns little-endian ordered binary
     * data as signed 16-bit integer.
     *
     * @return integer
     * @throws Exception if an I/O error occurs
     */
    public final function readInt16LE()
    {
        if ($this->_isBigEndian()) {
            return $this->_fromInt16(strrev($this->read(2)));
        } else {
            return $this->_fromInt16($this->read(2));
        }
    }

    /**
     * Reads 2 bytes from the stream and returns big-endian ordered binary data
     * as signed 16-bit integer.
     *
     * @return integer
     * @throws Exception if an I/O error occurs
     */
    public final function readInt16BE()
    {
        if ($this->_isLittleEndian()) {
            return $this->_fromInt16(strrev($this->read(2)));
        } else {
            return $this->_fromInt16($this->read(2));
        }
    }

    /**
     * Reads 2 bytes from the stream and returns machine ordered binary data
     * as signed 16-bit integer.
     *
     * @return integer
     * @throws Exception if an I/O error occurs
     */
    public final function readInt16(int $order = self::MACHINE_ENDIAN_ORDER): int
    {
        switch ($order) {
            case self::MACHINE_ENDIAN_ORDER:
                return $this->_fromInt16($this->read(2));
            case self::LITTLE_ENDIAN_ORDER:
                return $this->readInt16LE();
            case self::BIG_ENDIAN_ORDER:
                return $this->readInt16BE();
            default:
                throw new InvalidArgumentException('invalid value for order');
        }
    }

    /**
     * Returns machine endian ordered binary data as unsigned 16-bit integer.
     *
     * @param string  $value The binary data string.
     * @param integer $order The byte order of the binary data string.
     * @return integer
     */
    private function _fromUInt16($value, int $order = 0): int
    {
        list(, $int) = unpack(($order == self::BIG_ENDIAN_ORDER ? 'n' : ($order == self::LITTLE_ENDIAN_ORDER ? 'v' : 'S')) . '*',
            $value
        );
        return $int;
    }

    /**
     * Reads 2 bytes from the stream and returns little-endian ordered binary
     * data as unsigned 16-bit integer.
     *
     * @return integer
     */
    public final function readUInt16LE(): int
    {
        return $this->_fromUInt16($this->read(2), self::LITTLE_ENDIAN_ORDER);
    }

    /**
     * Reads 2 bytes from the stream and returns big-endian ordered binary data
     * as unsigned 16-bit integer.
     *
     * @return integer
     */
    public final function readUInt16BE(): int
    {
        return $this->_fromUInt16($this->read(2), self::BIG_ENDIAN_ORDER);
    }

    /**
     * Reads 2 bytes from the stream and returns machine ordered binary data
     * as unsigned 16-bit integer.
     *
     * @return integer
     */
    public final function readUInt16(int $order = self::MACHINE_ENDIAN_ORDER): int
    {
        return $this->_fromUInt16($this->read(2), $order);
    }

    /**
     * Returns machine-endian ordered binary data as signed 32-bit integer.
     *
     * @param string $value The binary data string.
     * @return integer
     */
    private function _fromInt32($value): int
    {
        list(, $int) = unpack('l*', $value);
        return $int;
    }

    /**
     * Reads 4 bytes from the stream and returns little-endian ordered binary
     * data as signed 32-bit integer.
     *
     * @return integer
     * @throws Exception if an I/O error occurs
     */
    public final function readInt32LE()
    {
        if ($this->_isBigEndian())
            return $this->_fromInt32(strrev($this->read(4)));
        else
            return $this->_fromInt32($this->read(4));
    }

    /**
     * Reads 4 bytes from the stream and returns big-endian ordered binary data
     * as signed 32-bit integer.
     *
     * @return integer
     * @throws Exception if an I/O error occurs
     */
    public final function readInt32BE()
    {
        if ($this->_isLittleEndian())
            return $this->_fromInt32(strrev($this->read(4)));
        else
            return $this->_fromInt32($this->read(4));
    }

    /**
     * Reads 4 bytes from the stream and returns machine ordered binary data
     * as signed 32-bit integer.
     *
     * @return integer
     */
    public final function readInt32(int $order = self::MACHINE_ENDIAN_ORDER): int
    {
        switch ($order) {
            case self::MACHINE_ENDIAN_ORDER:
                return $this->_fromInt32($this->read(4));
            case self::LITTLE_ENDIAN_ORDER:
                return $this->readInt32LE();
            case self::BIG_ENDIAN_ORDER:
                return $this->readInt32BE();
            default:
                throw new InvalidArgumentException('invalid value for order');
        }
    }

    /**
     * Reads 4 bytes from the stream and returns little-endian ordered binary
     * data as unsigned 32-bit integer.
     *
     * @return integer
     * @throws Exception if an I/O error occurs
     */
    public final function readUInt32LE(): int
    {
        if (PHP_INT_SIZE < 8) {
            list(, $lo, $hi) = unpack('v*', $this->read(4));
            return $hi * (0xffff + 1) + $lo; // eq $hi << 16 | $lo
        } else {
            list(, $int) = unpack('V*', $this->read(4));
            return $int;
        }
    }

    /**
     * Reads 4 bytes from the stream and returns big-endian ordered binary data
     * as unsigned 32-bit integer.
     *
     * @return integer
     * @throws Exception if an I/O error occurs
     */
    public final function readUInt32BE(): int
    {
        if (PHP_INT_SIZE < 8) {
            list(, $hi, $lo) = unpack('n*', $this->read(4));
            return $hi * (0xffff + 1) + $lo; // eq $hi << 16 | $lo
        } else {
            list(, $int) = unpack('N*', $this->read(4));
            return $int;
        }
    }

    /**
     * Reads 4 bytes from the stream and returns machine ordered binary data
     * as unsigned 32-bit integer.
     *
     * @return integer
     */
    public final function readUInt32(int $order = self::MACHINE_ENDIAN_ORDER): int
    {
        switch ($order) {
            case self::MACHINE_ENDIAN_ORDER:
                if (PHP_INT_SIZE < 8) {
                    list(, $hi, $lo) = unpack('L*', $this->read(4));
                    return $hi * (0xffff + 1) + $lo; // eq $hi << 16 | $lo
                } else {
                    list(, $int) = unpack('L*', $this->read(4));
                    return $int;
                }
            case self::LITTLE_ENDIAN_ORDER:
                return $this->readUInt32LE();
            case self::BIG_ENDIAN_ORDER:
                return $this->readUInt32BE();
            default:
                throw new InvalidArgumentException('invalid value for order');
        }
    }

    /**
     * Reads 8 bytes from the stream and returns little-endian ordered binary
     * data as 64-bit float.
     *
     * {@internal PHP does not support 64-bit integers as the long
     * integer is of 32-bits but using aritmetic operations it is implicitly
     * converted into floating point which is of 64-bits long.}}
     *
     * @return float
     */
    public final function readInt64LE(): float
    {
        list(, $lolo, $lohi, $hilo, $hihi) = unpack('v*', $this->read(8));
        return ($hihi * (0xffff + 1) + $hilo) * (0xffffffff + 1) +
            ($lohi * (0xffff + 1) + $lolo);
    }

    /**
     * Reads 8 bytes from the stream and returns big-endian ordered binary data
     * as 64-bit float.
     *
     * {@internal PHP does not support 64-bit integers as the long integer is of
     * 32-bits but using aritmetic operations it is implicitly converted into
     * floating point which is of 64-bits long.}}
     *
     * @return float
     */
    public final function readInt64BE(): float
    {
        list(, $hihi, $hilo, $lohi, $lolo) = unpack('n*', $this->read(8));
        return ($hihi * (0xffff + 1) + $hilo) * (0xffffffff + 1) +
            ($lohi * (0xffff + 1) + $lolo);
    }

    /**
     * Returns machine endian ordered binary data as a 32-bit floating point
     * number as defined by IEEE 754.
     *
     * @param string $value The binary data string.
     * @return float
     */
    private function _fromFloat($value): float
    {
        list(, $float) = unpack('f', $value);
        return $float;
    }

    /**
     * Reads 4 bytes from the stream and returns little-endian ordered binary
     * data as a 32-bit float point number as defined by IEEE 754.
     *
     * @return float
     * @throws Exception if an I/O error occurs
     */
    public final function readFloatLE(): float
    {
        if ($this->_isBigEndian()) {
            return $this->_fromFloat(strrev($this->read(4)));
        } else {
            return $this->_fromFloat($this->read(4));
        }
    }

    /**
     * Reads 4 bytes from the stream and returns big-endian ordered binary data
     * as a 32-bit float point number as defined by IEEE 754.
     *
     * @return float
     * @throws Exception if an I/O error occurs
     */
    public final function readFloatBE(): float
    {
        if ($this->_isLittleEndian()) {
            return $this->_fromFloat(strrev($this->read(4)));
        } else {
            return $this->_fromFloat($this->read(4));
        }
    }

    /**
     * Returns machine endian ordered binary data as a 64-bit floating point
     * number as defined by IEEE754.
     *
     * @param string $value The binary data string.
     * @return float
     */
    private function _fromDouble($value): float
    {
        list(, $double) = unpack('d', $value);
        return $double;
    }

    /**
     * Reads 8 bytes from the stream and returns little-endian ordered binary
     * data as a 64-bit floating point number as defined by IEEE 754.
     *
     * @return float
     * @throws Exception if an I/O error occurs
     */
    public final function readDoubleLE(): float
    {
        if ($this->_isBigEndian()) {
            return $this->_fromDouble(strrev($this->read(8)));
        } else {
            return $this->_fromDouble($this->read(8));
        }
    }

    /**
     * Reads 8 bytes from the stream and returns big-endian ordered binary data
     * as a 64-bit float point number as defined by IEEE 754.
     *
     * @return float
     * @throws Exception if an I/O error occurs
     */
    public final function readDoubleBE(): float
    {
        if ($this->_isLittleEndian()) {
            return $this->_fromDouble(strrev($this->read(8)));
        } else {
            return $this->_fromDouble($this->read(8));
        }
    }

    /**
     * Reads <var>length</var> amount of bytes from the stream and returns
     * binary data as string. Removes terminating zero.
     *
     * @param integer $length   The amount of bytes.
     * @param string  $charList The list of characters you want to strip.
     * @return string
     * @throws Exception if <var>length</var> attribute is negative or
     *  if an I/O error occurs
     */
    public final function readString8($length, $charList = "\0"): string
    {
        return rtrim($this->read($length), $charList);
    }

    /**
     * Reads <var>length</var> amount of bytes from the stream and returns
     * binary data as multibyte Unicode string. Removes terminating zero.
     *
     * The byte order is possibly determined from the byte order mark included
     * in the binary data string. The order parameter is updated if the BOM is
     * found.
     *
     * @param integer $length    The amount of bytes.
     * @param integer $order     The endianess of the string.
     * @param bool $trimOrder Whether to remove the byte order mark read the
     *                string.
     * @return string
     * @throws Exception if <var>length</var> attribute is negative or
     *  if an I/O error occurs
     */
    public final function readString16(int $length, int &$order = null, bool $trimOrder = false): string
    {
        $value = $this->read($length);

        if (strlen($value) < 2) {
            return '';
        }

        if (ord($value[0]) == 0xfe && ord($value[1]) == 0xff) {
            $order = self::BIG_ENDIAN_ORDER;
            if ($trimOrder) {
                $value = substr($value, 2);
            }
        }
        if (ord($value[0]) == 0xff && ord($value[1]) == 0xfe) {
            $order = self::LITTLE_ENDIAN_ORDER;
            if ($trimOrder) {
                $value = substr($value, 2);
            }
        }

        while (substr($value, -2) == "\0\0") {
            $value = substr($value, 0, -2);
        }

        return $value;
    }

    /**
     * Reads <var>length</var> amount of bytes from the stream and returns
     * binary data as hexadecimal string having high nibble first.
     *
     * @param integer $length The amount of bytes.
     * @return string
     * @throws Exception if <var>length</var> attribute is negative or
     *  if an I/O error occurs
     */
    public final function readHHex($length): string
    {
        list($hex) = unpack('H*0', $this->read($length));
        return $hex;
    }

    /**
     * Reads <var>length</var> amount of bytes from the stream and returns
     * binary data as hexadecimal string having low nibble first.
     *
     * @param integer $length The amount of bytes.
     * @return string
     * @throws Exception if <var>length</var> attribute is negative or
     *  if an I/O error occurs
     */
    public final function readLHex($length): string
    {
        list($hex) = unpack('h*0', $this->read($length));
        return $hex;
    }

    /**
     * Reads 16 bytes from the stream and returns the little-endian ordered
     * binary data as mixed-ordered hexadecimal GUID string.
     *
     * @return string
     * @throws Exception if an I/O error occurs
     */
    public final function readGuid(): string
    {
        $C = @unpack('V1V/v2v/N2N', $this->read(16));
        list($hex) = @unpack('H*0', pack('NnnNN', $C['V'], $C['v1'], $C['v2'], $C['N1'], $C['N2']));

        /* Fixes a bug in PHP versions earlier than Jan 25 2006 */
        if (implode('', unpack('H*', pack('H*', 'a'))) == 'a00') {
            $hex = substr($hex, 0, -1);
        }

        return preg_replace('/^(.{8})(.{4})(.{4})(.{4})/', "\\1-\\2-\\3-\\4-", $hex);
    }

    /**
     * Returns the current machine endian order.
     *
     * @return integer
     */
    private function _getEndianess(): int
    {
        if (self::$_endianess === 0) {
            self::$_endianess = $this->_fromInt32("\x01\x00\x00\x00") == 1 ?
                self::LITTLE_ENDIAN_ORDER : self::BIG_ENDIAN_ORDER;
        }
        return self::$_endianess;
    }

    /**
     * Returns whether the current machine endian order is little endian.
     *
     * @return boolean
     */
    private function _isLittleEndian(): bool
    {
        return $this->_getEndianess() == self::LITTLE_ENDIAN_ORDER;
    }

    /**
     * Returns whether the current machine endian order is big endian.
     *
     * @return boolean
     */
    private function _isBigEndian(): bool
    {
        return $this->_getEndianess() == self::BIG_ENDIAN_ORDER;
    }
}
