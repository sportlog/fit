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
use Countable;
use FIT\Profile\Message\FileIdMessage;
use IteratorAggregate;
use Traversable;

/**
 * Collection of decoded messages.
 */
class MessageList implements IteratorAggregate, Countable
{
    private array $messages = [];

    /**
     * Gets the file type taken from the FileIdMessage.
     *
     * @return integer|null
     */
    public function getFileType(): ?int {
        $messages = $this->getMessages(FileIdMessage::class);
        if (count($messages) !== 1) {
            return null;
        }

        /** @var FileIdMessage $fileIdMessage */
        $fileIdMessage = $messages[0];
        return $fileIdMessage->getType();
    }

    /**
     * Gets all messages for the specified class id.
     */
    public function getMessages(string $classId): array {
        return isset($this->messages[$classId]) ? $this->messages[$classId] : [];
    }

    public function addMessage(Message $message): void
    {
        $classId = $message::class;
        if (isset($this->messages[$classId])) {
            $this->messages[$classId][] = $message;
        } else {
            $this->messages[$classId] = [$message];
        }
    }

    public function count(): int {
        return count($this->messages);
    }

     /**
     * Gets an iterator.
     *
     * {@inheritDoc}
     * @see IteratorAggregate::getIterator()
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->messages);
    }
}
