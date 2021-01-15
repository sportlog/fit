<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT;

use Exception;

/**
 * A FitException is raised when
 * the FIT field is invalid or contains
 * incosistent data and cannot be decoded.
 */
class FitException extends Exception {
}