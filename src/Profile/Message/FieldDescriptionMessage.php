<?php

/**
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace FIT\Profile\Message;

use DateTime;
use FIT\FitBaseType;
use FIT\Profile\Field;
use FIT\Profile\Message;
use FIT\Profile\MessageNumber;
use FIT\Profile\ProfileType;

/**
 * FieldDescriptionMessage message
 */
#[Field('DeveloperDataIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('FieldDefinitionNumber', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('FitBaseTypeId', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::FITBASETYPE)]
#[Field('FieldName', 3, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Array', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Components', 5, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Scale', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Offset', 7, FitBaseType::SINT8, 1.0, 0.0, '', false, ProfileType::SINT8)]
#[Field('Units', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Bits', 9, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Accumulate', 10, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('FitBaseUnitId', 13, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::FITBASEUNIT)]
#[Field('NativeMesgNum', 14, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESGNUM)]
#[Field('NativeFieldNum', 15, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class FieldDescriptionMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('FieldDescription', MessageNumber::FieldDescription);
    }

    /**
     * Gets the developer data index
     */
    public function getDeveloperDataIndex(): ?int
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the field definition number
     */
    public function getFieldDefinitionNumber(): ?int
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the fit base type id
     */
    public function getFitBaseTypeId(): ?int
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the field name
     */
    public function getFieldName(): ?string
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the array
     */
    public function getArray(): ?int
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the components
     */
    public function getComponents(): ?string
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the scale
     */
    public function getScale(): ?int
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the offset
     */
    public function getOffset(): ?int
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the units
     */
    public function getUnits(): ?string
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the bits
     */
    public function getBits(): ?string
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the accumulate
     */
    public function getAccumulate(): ?string
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the fit base unit id
     */
    public function getFitBaseUnitId(): ?int
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the native mesg num
     */
    public function getNativeMesgNum(): ?int
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the native field num
     */
    public function getNativeFieldNum(): ?int
    {
        return $this->getFieldValue(15);
    }
}
