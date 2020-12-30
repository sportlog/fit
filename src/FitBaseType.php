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
use ReflectionClass;

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

	private static ?array $fieldDefinitions = null;

	private static function getFieldDefinitions(): array
	{
		if (is_null(self::$fieldDefinitions)) {
			self::$fieldDefinitions = [
				self::ENUM		=> new FitBaseTypeDefinition(false, "enum",		1, 0xFF),
				self::SINT8		=> new FitBaseTypeDefinition(false, "sint8",		1, 0x7F),
				self::UINT8		=> new FitBaseTypeDefinition(false, "uint8",		1, 0xFF),
				self::SINT16	=> new FitBaseTypeDefinition(true, "sint16",	2, 0x7FFF),
				self::UINT16	=> new FitBaseTypeDefinition(true, "uint16",	2, 0xFFFF),
				self::SINT32	=> new FitBaseTypeDefinition(true, "sint32",	4, 0x7FFFFFFF),
				self::UINT32	=> new FitBaseTypeDefinition(true, "uint32",	4, 0xFFFFFFFF),
				self::STRING	=> new FitBaseTypeDefinition(false, "string",	1, 0x00),
				self::FLOAT32	=> new FitBaseTypeDefinition(true, "float32",	4, 0xFFFFFFFF),
				self::FLOAT64	=> new FitBaseTypeDefinition(true, "float64",	8, 0xFFFFFFFFFFFFFFFF),
				self::UINT8Z	=> new FitBaseTypeDefinition(false, "uint8z",	1, 0x00),
				self::UINT16Z	=> new FitBaseTypeDefinition(true, "uint16z",	2, 0x0000),
				self::UINT32Z	=> new FitBaseTypeDefinition(true, "uint32z",	4, 0x00000000),
				self::BYTE		=> new FitBaseTypeDefinition(false, "byte",		1, 0xFF),
				self::SINT64	=> new FitBaseTypeDefinition(true, "sint64",	8, 0x7FFFFFFFFFFFFFFF),
				self::UINT64	=> new FitBaseTypeDefinition(true, "uint64",	8, 0xFFFFFFFFFFFFFFFF),
				self::UINT64Z	=> new FitBaseTypeDefinition(true, "uint64z",	8, 0x0000000000000000)
			];
		}

		return self::$fieldDefinitions;
	}

	public static function fromType(int $baseType): ?FitBaseTypeDefinition
	{
		if (!isset(self::getFieldDefinitions()[$baseType])) {
			return null;
		}

		return self::getFieldDefinitions()[$baseType];
	}
}
