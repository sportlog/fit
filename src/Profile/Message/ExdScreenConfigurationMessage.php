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
final class ExdScreenConfigurationMessage extends Message
{
    public function getScreenIndex(): ?int
    {
        return $this->getValue(0);
    }

    public function getFieldCount(): ?int
    {
        return $this->getValue(1);
    }

    public function getLayout(): ?int
    {
        return $this->getValue(2);
    }

    public function getScreenEnabled(): ?bool
    {
        return $this->getValue(3);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("ExdScreenConfiguration", MessageNumber::ExdScreenConfiguration, [
        new Field('ScreenIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('FieldCount', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('Layout', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EXDLAYOUT),
            new Field('ScreenEnabled', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)
        ]);
    }
}
