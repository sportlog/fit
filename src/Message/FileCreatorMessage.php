<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Message;

use Sportlog\ActivityProtocol\FIT\FitBaseType;

class FileCreatorMessage extends Message
{
    #[Field("SoftwareVersion", 0, FitBaseType::UINT16, ProfileType::UINT16)]
    public int $softwareVersion;
    #[Field("HardwareVersion", 1, FitBaseType::UINT8, ProfileType::UINT8)]
    public int $hardwareVersion;

    public function __construct()
    {
        parent::__construct("FileCreator", MessageNumber::FileCreator);
    }
}
