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
 * DiveSummaryMessage message
 */
final class DiveSummaryMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('ReferenceMesg', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESGNUM)]
    public ?int $referenceMesg;

    #[Field('ReferenceIndex', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $referenceIndex;

    #[Field('AvgDepth', 2, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $avgDepth;

    #[Field('MaxDepth', 3, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $maxDepth;

    #[Field('SurfaceInterval', 4, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $surfaceInterval;

    #[Field('StartCns', 5, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $startCns;

    #[Field('EndCns', 6, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $endCns;

    #[Field('StartN2', 7, FitBaseType::UINT16, 1.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $startN2;

    #[Field('EndN2', 8, FitBaseType::UINT16, 1.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $endN2;

    #[Field('O2Toxicity', 9, FitBaseType::UINT16, 1.0, 0.0, 'OTUs', false, ProfileType::UINT16)]
    public ?int $o2Toxicity;

    #[Field('DiveNumber', 10, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $diveNumber;

    #[Field('BottomTime', 11, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $bottomTime;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("DiveSummary", MessageNumber::DiveSummary);
    }
}
