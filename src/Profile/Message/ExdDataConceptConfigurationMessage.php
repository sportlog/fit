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
final class ExdDataConceptConfigurationMessage extends Message
{
    #[Field('ScreenIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $screenIndex;

    #[Field('ConceptField', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $conceptField;

    #[Field('FieldId', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $fieldId;

    #[Field('ConceptIndex', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $conceptIndex;

    #[Field('DataPage', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $dataPage;

    #[Field('ConceptKey', 5, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $conceptKey;

    #[Field('Scaling', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $scaling;

    #[Field('DataUnits', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EXDDATAUNITS)]
    public ?int $dataUnits;

    #[Field('Qualifier', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EXDQUALIFIERS)]
    public ?int $qualifier;

    #[Field('Descriptor', 10, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EXDDESCRIPTORS)]
    public ?int $descriptor;

    #[Field('IsSigned', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $isSigned;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("ExdDataConceptConfiguration", MessageNumber::ExdDataConceptConfiguration);
    }
}
