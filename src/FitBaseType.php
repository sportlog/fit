<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT;

class FitBaseType
{
	const ENUM		= 0;
	const SINT8		= 1;
	const UINT8		= 2;
	const SINT16	= 131;
	const UINT16	= 132;
	const SINT32	= 133;
	const UINT32	= 134;
	const STRING	= 7;
	const FLOAT32	= 136;
	const FLOAT64	= 137;
	const UINT8Z	= 10;
	const UINT16Z	= 139;
	const UINT32Z	= 140;
	const BYTE		= 13;
	const SINT64	= 142;
	const UINT64	= 143;
	const UINT64Z   = 144;
	const Invalid   = 255;

	private static $baseTypes = array(
		self::ENUM		=> array('endian_ability' => false,	'name'	=> 'enum',		'bytes' => 1, 'invalid_value' => 0xFF),
		self::SINT8		=> array('endian_ability' => false,	'name'	=> 'sint8',		'bytes' => 1, 'invalid_value' => 0x7F),
		self::UINT8		=> array('endian_ability' => false,	'name'	=> 'uint8',		'bytes' => 1, 'invalid_value' => 0xFF),
		self::SINT16	=> array('endian_ability' => true,	'name'	=> 'sint16',	'bytes' => 2, 'invalid_value' => 0x7FFF),
		self::UINT16	=> array('endian_ability' => true,	'name'	=> 'uint16',	'bytes' => 2, 'invalid_value' => 0xFFFF),
		self::SINT32	=> array('endian_ability' => true,	'name'	=> 'sint32',	'bytes' => 4, 'invalid_value' => 0x7FFFFFFF),
		self::UINT32	=> array('endian_ability' => true,	'name'	=> 'uint32',	'bytes' => 4, 'invalid_value' => 0xFFFFFFFF),
		self::STRING	=> array('endian_ability' => false,	'name'	=> 'string',	'bytes' => 1, 'invalid_value' => 0x00),
		self::FLOAT32	=> array('endian_ability' => true,	'name'	=> 'float32',	'bytes' => 4, 'invalid_value' => 0xFFFFFFFF),
		self::FLOAT64	=> array('endian_ability' => true,	'name'	=> 'float64',	'bytes' => 8, 'invalid_value' => 0xFFFFFFFFFFFFFFFF),
		self::UINT8Z	=> array('endian_ability' => false,	'name'	=> 'uint8z',	'bytes' => 1, 'invalid_value' => 0x00),
		self::UINT16Z	=> array('endian_ability' => true,	'name'	=> 'uint16z',	'bytes' => 2, 'invalid_value' => 0x0000),
		self::UINT32Z	=> array('endian_ability' => true,	'name'	=> 'uint32z',	'bytes' => 4, 'invalid_value' => 0x00000000),
		self::BYTE		=> array('endian_ability' => false,	'name'	=> 'byte',		'bytes' => 1, 'invalid_value' => 0xFF),
		self::SINT64	=> array('endian_ability' => true,	'name'	=> 'sint64',	'bytes' => 8, 'invalid_value' => 0x7FFFFFFFFFFFFFFF),
		self::UINT64	=> array('endian_ability' => true,	'name'	=> 'uint64',	'bytes' => 8, 'invalid_value' => 0xFFFFFFFFFFFFFFFF),
		self::UINT64Z	=> array('endian_ability' => true,	'name'	=> 'uint64z',	'bytes' => 8, 'invalid_value' => 0x0000000000000000)
	);

	public static function fromType(int $baseType): ?array {
		if (!isset(self::$baseTypes[$baseType])) {
			return null;			
		}

		return self::$baseTypes[$baseType];
	}
}
