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
 * ExdDataConceptConfigurationMessage message
 */
#[Field('ScreenIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('ConceptField', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('FieldId', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('ConceptIndex', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('DataPage', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('ConceptKey', 5, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Scaling', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('DataUnits', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EXDDATAUNITS)]
#[Field('Qualifier', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EXDQUALIFIERS)]
#[Field('Descriptor', 10, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EXDDESCRIPTORS)]
#[Field('IsSigned', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
final class ExdDataConceptConfigurationMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ExdDataConceptConfiguration', MessageNumber::ExdDataConceptConfiguration);
    }

    public function getScreenIndex(): ?int
    {
        return $this->getValue(0);
    }

    public function getConceptField(): ?int
    {
        return $this->getValue(1);
    }

    public function getFieldId(): ?int
    {
        return $this->getValue(2);
    }

    public function getConceptIndex(): ?int
    {
        return $this->getValue(3);
    }

    public function getDataPage(): ?int
    {
        return $this->getValue(4);
    }

    public function getConceptKey(): ?int
    {
        return $this->getValue(5);
    }

    public function getScaling(): ?int
    {
        return $this->getValue(6);
    }

    public function getDataUnits(): ?int
    {
        return $this->getValue(8);
    }

    public function getQualifier(): ?int
    {
        return $this->getValue(9);
    }

    public function getDescriptor(): ?int
    {
        return $this->getValue(10);
    }

    public function getIsSigned(): ?bool
    {
        return $this->getValue(11);
    }
}
