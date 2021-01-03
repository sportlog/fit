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
    #[Field('ScreenIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $screenIndex;

    #[Field('FieldCount', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $fieldCount;

    #[Field('Layout', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EXDLAYOUT)]
    public ?int $layout;

    #[Field('ScreenEnabled', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $screenEnabled;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("ExdScreenConfiguration", MessageNumber::ExdScreenConfiguration);
    }
}
