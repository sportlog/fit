<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Profile;

use ArrayIterator;
use IteratorAggregate;
use Stringable;

abstract class Message implements IteratorAggregate, Stringable
{
    public $values = [];

    public function __construct(private string $name, private int $number)
    {
    }

    /**
     * Gets the message number, which must correspond
     * to one value defined in MessageInterface
     *
     * @return integer
     */
    public function getMessageNumber(): int {
        return $this->number;
    }

    /**
     * Gets the name of the message.
     *
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    public function __toString() {
        return sprintf('%s (%s)', $this->getName(), $this->getMessageNumber());
        /*$mapped = [];

        foreach ($this->values as $key => $fieldValue) {
            $mapped[] = $fieldValue['name'];
            $value = $fieldValue['value'];
            if (is_array($value)) {
                $singleValues = [];
                foreach ($value as $singeValue) {
                    $singleValues[] = !$fieldValue['type']->isInvalid($singeValue) ? $singeValue : '';
                }
                $mapped[] = sprintf('[%s]', join(",", $singleValues));
            }
            else {
                $mapped[] = !$fieldValue['type']->isInvalid($value) ? $value : '';
            }
        }
        return sprintf('%s: %s', $this->name, join(",", $mapped));
        */
    }

     /**
     * Gets an iterator.
     *
     * {@inheritDoc}
     * @see IteratorAggregate::getIterator()
     */
    public function getIterator()
    {
        return new ArrayIterator($this->values);
    }
}