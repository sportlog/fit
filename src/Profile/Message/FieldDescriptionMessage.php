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
final class FieldDescriptionMessage extends Message
{
    #[Field('DeveloperDataIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $developerDataIndex;

    #[Field('FieldDefinitionNumber', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $fieldDefinitionNumber;

    #[Field('FitBaseTypeId', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::FITBASETYPE)]
    public ?int $fitBaseTypeId;

    #[Field('FieldName', 3, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $fieldName;

    #[Field('Array', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $array;

    #[Field('Components', 5, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $components;

    #[Field('Scale', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $scale;

    #[Field('Offset', 7, FitBaseType::SINT8, 1.0, 0.0, '', false, ProfileType::SINT8)]
    public ?int $offset;

    #[Field('Units', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $units;

    #[Field('Bits', 9, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $bits;

    #[Field('Accumulate', 10, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $accumulate;

    #[Field('FitBaseUnitId', 13, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::FITBASEUNIT)]
    public ?int $fitBaseUnitId;

    #[Field('NativeMesgNum', 14, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESGNUM)]
    public ?int $nativeMesgNum;

    #[Field('NativeFieldNum', 15, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $nativeFieldNum;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("FieldDescription", MessageNumber::FieldDescription);
    }
}
