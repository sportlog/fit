<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.126Release
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
 * JumpMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('Distance', 0, FitBaseType::FLOAT32, 1.0, 0.0, 'm', false, ProfileType::FLOAT32)]
#[Field('Height', 1, FitBaseType::FLOAT32, 1.0, 0.0, 'm', false, ProfileType::FLOAT32)]
#[Field('Rotations', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('HangTime', 3, FitBaseType::FLOAT32, 1.0, 0.0, 's', false, ProfileType::FLOAT32)]
#[Field('Score', 4, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32)]
#[Field('PositionLat', 5, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('PositionLong', 6, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('Speed', 7, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('EnhancedSpeed', 8, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
final class JumpMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Jump', MesgNum::JUMP);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the distance
     */
    public function getDistance(): float|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the height
     */
    public function getHeight(): float|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the rotations
     */
    public function getRotations(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the hang time
     */
    public function getHangTime(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the score
     */
    public function getScore(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the position lat
     */
    public function getPositionLat(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the position long
     */
    public function getPositionLong(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the speed
     */
    public function getSpeed(): float|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the enhanced speed
     */
    public function getEnhancedSpeed(): float|array|null
    {
        return $this->getFieldValue(8);
    }
}
