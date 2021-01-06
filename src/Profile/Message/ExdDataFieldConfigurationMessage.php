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
 * ExdDataFieldConfigurationMessage message
 */
#[Field('ScreenIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('ConceptField', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('FieldId', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('ConceptCount', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('DisplayType', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EXDDISPLAYTYPE)]
#[Field('Title', 5, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
final class ExdDataFieldConfigurationMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ExdDataFieldConfiguration', MessageNumber::ExdDataFieldConfiguration);
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
     * Gets the concept count
     */
    public function getConceptCount(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the display type
     */
    public function getDisplayType(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the title
     */
    public function getTitle(): ?string
    {
        return $this->getValue(5);
    }
}
