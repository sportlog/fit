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
final class JumpMessage extends Message
{
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getDistance(): ?float
    {
        return $this->getValue(0);
    }

    public function getHeight(): ?float
    {
        return $this->getValue(1);
    }

    public function getRotations(): ?int
    {
        return $this->getValue(2);
    }

    public function getHangTime(): ?float
    {
        return $this->getValue(3);
    }

    public function getScore(): ?float
    {
        return $this->getValue(4);
    }

    public function getPositionLat(): ?int
    {
        return $this->getValue(5);
    }

    public function getPositionLong(): ?int
    {
        return $this->getValue(6);
    }

    public function getSpeed(): ?int
    {
        return $this->getValue(7);
    }

    public function getEnhancedSpeed(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Jump", MessageNumber::Jump, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('Distance', 0, FitBaseType::FLOAT32, 1.0, 0.0, 'm', false, ProfileType::FLOAT32),
            new Field('Height', 1, FitBaseType::FLOAT32, 1.0, 0.0, 'm', false, ProfileType::FLOAT32),
            new Field('Rotations', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('HangTime', 3, FitBaseType::FLOAT32, 1.0, 0.0, 's', false, ProfileType::FLOAT32),
            new Field('Score', 4, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32),
            new Field('PositionLat', 5, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('PositionLong', 6, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('Speed', 7, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16),
            new Field('EnhancedSpeed', 8, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)
        ]);
    }
}
