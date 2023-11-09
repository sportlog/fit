<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Types;

class CameraEventType
{
    /**
     * Start of video recording
     */
    public const VideoStart = 0;

    /** "Mark of video file split (end of one file */
    public const VideoSplit = 1;

    /**
     * End of video recording
     */
    public const VideoEnd = 2;

    /**
     * Still photo taken
     */
    public const PhotoTaken = 3;
    public const VideoSecondStreamStart = 4;
    public const VideoSecondStreamSplit = 5;
    public const VideoSecondStreamEnd = 6;

    /**
     * Mark of video file split start
     */
    public const VideoSplitStart = 7;
    public const VideoSecondStreamSplitStart = 8;

    /**
     * Mark when a video recording has been paused
     */
    public const VideoPause = 11;
    public const VideoSecondStreamPause = 12;

    /**
     * Mark when a video recording has been resumed
     */
    public const VideoResume = 13;
    public const VideoSecondStreamResume = 14;
}
