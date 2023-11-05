<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * FieldDescriptionMessage message
 */
#[Field('DeveloperDataIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('FieldDefinitionNumber', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('FitBaseTypeId', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::FitBaseType)]
#[Field('FieldName', 3, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::String)]
#[Field('Array', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('Components', 5, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::String)]
#[Field('Scale', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('Offset', 7, FitBaseType::SINT8, 1.0, 0.0, '', false, ProfileType::Sint8)]
#[Field('Units', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::String)]
#[Field('Bits', 9, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::String)]
#[Field('Accumulate', 10, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::String)]
#[Field('FitBaseUnitId', 13, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::FitBaseUnit)]
#[Field('NativeMesgNum', 14, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MesgNum)]
#[Field('NativeFieldNum', 15, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
final class FieldDescriptionMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('FieldDescription', MesgNum::FieldDescription->value);
    }

    /**
     * Gets the developer data index
     */
    public function getDeveloperDataIndex(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the field definition number
     */
    public function getFieldDefinitionNumber(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the fit base type id
     */
    public function getFitBaseTypeId(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the field name
     */
    public function getFieldName(): string|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the array
     */
    public function getArray(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the components
     */
    public function getComponents(): string|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the scale
     */
    public function getScale(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the offset
     */
    public function getOffset(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the units
     */
    public function getUnits(): string|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the bits
     */
    public function getBits(): string|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the accumulate
     */
    public function getAccumulate(): string|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the fit base unit id
     */
    public function getFitBaseUnitId(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the native mesg num
     */
    public function getNativeMesgNum(): int|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the native field num
     */
    public function getNativeFieldNum(): int|array|null
    {
        return $this->getFieldValue(15);
    }
}
