<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.171 SDK
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
        parent::__construct('ExdDataFieldConfiguration', MesgNum::EXD_DATA_FIELD_CONFIGURATION);
    }

    /**
     * Gets the screen index
     */
    public function getScreenIndex(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the concept field
     */
    public function getConceptField(): mixed
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the field id
     */
    public function getFieldId(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the concept count
     */
    public function getConceptCount(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the display type
     */
    public function getDisplayType(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the title
     */
    public function getTitle(): string|null
    {
        return $this->getFieldValue(5);
    }
}
