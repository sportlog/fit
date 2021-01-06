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
        parent::__construct('Jump', MessageNumber::Jump);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the distance
     */
    public function getDistance(): ?float
    {
        return $this->getValue(0);
    }

    /**
     * Gets the height
     */
    public function getHeight(): ?float
    {
        return $this->getValue(1);
    }

    /**
     * Gets the rotations
     */
    public function getRotations(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the hang time
     */
    public function getHangTime(): ?float
    {
        return $this->getValue(3);
    }

    /**
     * Gets the score
     */
    public function getScore(): ?float
    {
        return $this->getValue(4);
    }

    /**
     * Gets the position lat
     */
    public function getPositionLat(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the position long
     */
    public function getPositionLong(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the speed
     */
    public function getSpeed(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the enhanced speed
     */
    public function getEnhancedSpeed(): ?int
    {
        return $this->getValue(8);
    }
}
