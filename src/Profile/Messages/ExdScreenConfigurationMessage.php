<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.78Release
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
        parent::__construct('ExdScreenConfiguration', MesgNum::EXD_SCREEN_CONFIGURATION);
    }

    /**
     * Gets the screen index
     */
    public function getScreenIndex(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the field count
     */
    public function getFieldCount(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the layout
     */
    public function getLayout(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the screen enabled
     */
    public function getScreenEnabled(): bool|array|null
    {
        return $this->getFieldValue(3);
    }
}
