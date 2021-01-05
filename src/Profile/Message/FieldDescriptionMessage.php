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

    public function getDeveloperDataIndex(): ?int
    {
        return $this->getValue(0);
    }

    public function getFieldDefinitionNumber(): ?int
    {
        return $this->getValue(1);
    }

    public function getFitBaseTypeId(): ?int
    {
        return $this->getValue(2);
    }

    public function getFieldName(): ?string
    {
        return $this->getValue(3);
    }

    public function getArray(): ?int
    {
        return $this->getValue(4);
    }

    public function getComponents(): ?string
    {
        return $this->getValue(5);
    }

    public function getScale(): ?int
    {
        return $this->getValue(6);
    }

    public function getOffset(): ?int
    {
        return $this->getValue(7);
    }

    public function getUnits(): ?string
    {
        return $this->getValue(8);
    }

    public function getBits(): ?string
    {
        return $this->getValue(9);
    }

    public function getAccumulate(): ?string
    {
        return $this->getValue(10);
    }

    public function getFitBaseUnitId(): ?int
    {
        return $this->getValue(13);
    }

    public function getNativeMesgNum(): ?int
    {
        return $this->getValue(14);
    }

    public function getNativeFieldNum(): ?int
    {
        return $this->getValue(15);
    }
}
