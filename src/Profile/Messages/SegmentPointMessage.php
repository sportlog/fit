<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.54Release
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
 * SegmentPointMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('PositionLat', 1, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('PositionLong', 2, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('Distance', 3, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('Altitude', 4, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
#[Field('LeaderTime', 5, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
final class SegmentPointMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SegmentPoint', MesgNum::SEGMENT_POINT);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the position lat
     */
    public function getPositionLat(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the position long
     */
    public function getPositionLong(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the distance
     */
    public function getDistance(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the altitude
     */
    public function getAltitude(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the leader time
     */
    public function getLeaderTime(): float|array|null
    {
        return $this->getFieldValue(5);
    }
}
