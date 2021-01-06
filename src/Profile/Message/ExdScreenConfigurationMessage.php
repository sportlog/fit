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
 * ExdScreenConfigurationMessage message
 */
#[Field('ScreenIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('FieldCount', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Layout', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EXDLAYOUT)]
#[Field('ScreenEnabled', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
final class ExdScreenConfigurationMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ExdScreenConfiguration', MessageNumber::ExdScreenConfiguration);
    }

    /**
     * Gets the screen index
     */
    public function getScreenIndex(): ?int
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the field count
     */
    public function getFieldCount(): ?int
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the layout
     */
    public function getLayout(): ?int
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the screen enabled
     */
    public function getScreenEnabled(): ?bool
    {
        return $this->getFieldValue(3);
    }
}
