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
 * SegmentPointMessage message
 */
final class SegmentPointMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getPositionLat(): ?int
    {
        return $this->getValue(1);
    }

    public function getPositionLong(): ?int
    {
        return $this->getValue(2);
    }

    public function getDistance(): ?int
    {
        return $this->getValue(3);
    }

    public function getAltitude(): ?int
    {
        return $this->getValue(4);
    }

    public function getLeaderTime(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SegmentPoint", MessageNumber::SegmentPoint, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('PositionLat', 1, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('PositionLong', 2, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('Distance', 3, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32),
            new Field('Altitude', 4, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16),
            new Field('LeaderTime', 5, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)
        ]);
    }
}
