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
final class ExdDataFieldConfigurationMessage extends Message
{
    #[Field('ScreenIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $screenIndex;

    #[Field('ConceptField', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $conceptField;

    #[Field('FieldId', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $fieldId;

    #[Field('ConceptCount', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $conceptCount;

    #[Field('DisplayType', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EXDDISPLAYTYPE)]
    public ?int $displayType;

    #[Field('Title', 5, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $title;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("ExdDataFieldConfiguration", MessageNumber::ExdDataFieldConfiguration);
    }
}
