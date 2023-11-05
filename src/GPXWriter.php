<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT;

use Exception;
use Sportlog\FIT\Profile\MessageList;
use Sportlog\FIT\Profile\MessageNumber;
use Sportlog\FIT\Profile\Messages\RecordMessage;
use Sportlog\FIT\Profile\Messages\SessionMessage;
use Sportlog\FIT\Profile\Messages\SportMessage;
use Sportlog\FIT\Profile\Types\MesgNum;
use XMLWriter;

/**
 * Creates a GPX file from the FIT messages
 */
class GPXWriter
{
    /**
     * Creates a GPX file from the FIT messages
     *
     * @param string $file
     * @param MessageList $messages
     * @return void
     */
    public static function write(string $file, MessageList $messages): void
    {
        /** @var SessionMessage $session */
        $session = self::getFirstMessage($messages, MesgNum::Session);
        /** @var SportMessage $sport */
        $sport = self::getFirstMessage($messages, MesgNum::Sport);

        $writer = new XMLWriter();
        $writer->openURI($file);
        $writer->setIndent(true);
        $writer->startDocument('1.0', 'utf-8');
        $writer->startElement('gpx');
        $writer->writeAttribute('creator', 'sportlog/fit');
        $writer->writeAttribute('version', '1.0');
        $writer->writeAttribute('xsi:schemaLocation', 'http://www.topografix.com/GPX/1/1 http://www.topografix.com/GPX/1/1/gpx.xsdy');
        $writer->writeAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $writer->writeAttribute('xmlns:ns2', 'http://www.garmin.com/xmlschemas/GpxExtensions/v3');
        $writer->writeAttribute('xmlns:ns3', 'http://www.garmin.com/xmlschemas/TrackPointExtension/v1');
        $writer->writeAttribute('xmlns', 'http://www.topografix.com/GPX/1/1');
        $writer->startElement('metadata');
        $writer->writeElement('time', gmdate('Y-m-d\TH:i:s\Z', $session->getStartTime()?->getTimestamp()));
        $writer->endElement(); // metadata

        $writer->startElement('trk');
        $writer->writeElement('type', strval($sport->getSport()));
        $writer->writeElement('name', $sport->getName());

        $writer->startElement('trkseg');

        $semiCirclesToDegrees = (180 / pow(2, 31));

        foreach ($messages->getMessages(MesgNum::Record) as $record) {
            if ($record->getPositionLat() === null || $record->getPositionLong() === null) {
                continue;   // ignore records with missing position values
            }

            /** @var RecordMessage $record */
            $writer->startElement('trkpt');
            $writer->writeAttribute('lat', strval($record->getPositionLat() * $semiCirclesToDegrees));
            $writer->writeAttribute('lon', strval($record->getPositionLong() * $semiCirclesToDegrees));
            $writer->writeElement('ele', strval($record->getEnhancedAltitude()));
            $writer->writeElement('time', gmdate('Y-m-d\TH:i:s\Z', $record->getTimestamp()->getTimestamp()));
            $writer->startElement('extensions');
            $writer->startElement('ns3:TrackPointExtension');
            $writer->writeElement('ns3:hr', strval($record->getHeartRate()));
            $writer->endElement(); // ns3:TrackPointExtension
            $writer->endElement(); // extensions

            $writer->endElement(); // trkpt
        }

        $writer->endElement(); // trkseg

        $writer->endElement(); // trk
        $writer->endElement(); // gpx
        $writer->endDocument();
        $writer->flush();
    }

    private static function getFirstMessage(MessageList $messages, MesgNum $msgNumber): mixed
    {
        $items = $messages->getMessages($msgNumber);
        if (count($items) !== 1) {
            throw new Exception("expected exactly one message of type {$msgNumber->value}");
        }
        return $items[0];
    }
}
