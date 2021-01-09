<?php
declare (strict_types = 1);

/**
 * Sportlog (https://sportlog.at)
 *
 * @license MIT License
 */

namespace FIT\Test\TestCase;

class FilePath {
    /**
     * Getst the correct path for the file.
     *
     * @param string $file
     * @return string
     */
    static function getPathTo(string $file): string {
        return join(DIRECTORY_SEPARATOR, ['tests', 'Files', $file]);
    }
}
