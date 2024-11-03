<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.141 SDK
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
        parent::__construct('ExdDataConceptConfiguration', MesgNum::ExdDataConceptConfiguration->value);
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
     * Gets the concept index
     */
    public function getConceptIndex(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the data page
     */
    public function getDataPage(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the concept key
     */
    public function getConceptKey(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the scaling
     */
    public function getScaling(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the data units
     */
    public function getDataUnits(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the qualifier
     */
    public function getQualifier(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the descriptor
     */
    public function getDescriptor(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the is signed
     */
    public function getIsSigned(): bool|array|null
    {
        return $this->getFieldValue(11);
    }
}
