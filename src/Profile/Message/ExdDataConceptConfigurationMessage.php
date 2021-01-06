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

    /**
     * Gets the screen index
     */
    public function getScreenIndex(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the concept field
     */
    public function getConceptField(): mixed
    {
        return $this->getValue(1);
    }

    /**
     * Gets the field id
     */
    public function getFieldId(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the concept index
     */
    public function getConceptIndex(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the data page
     */
    public function getDataPage(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the concept key
     */
    public function getConceptKey(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the scaling
     */
    public function getScaling(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the data units
     */
    public function getDataUnits(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the qualifier
     */
    public function getQualifier(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the descriptor
     */
    public function getDescriptor(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Gets the is signed
     */
    public function getIsSigned(): ?bool
    {
        return $this->getValue(11);
    }
}
