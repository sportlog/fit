<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @author Johannes Aberidis
 * @license MIT License
 */

namespace Sportlog\FIT\Profile;

use Countable;
use Sportlog\FIT\Profile\Message\FileIdMessage;
use IteratorAggregate;
use RecursiveArrayIterator;
use Traversable;

/**
 * Collection of decoded messages.
 */
class MessageList implements IteratorAggregate, Countable
{
    /**
     * Two dimensional array which keeps the messages
     * grouped by their class id. So the key is the class id
     * and the value is an array of messages of that type.
     */
    private array $messages = [];

    /**
     * Gets the file type taken from the FileIdMessage.
     * Every valid FIT file must have exactly one FileIdMessage.
     *
     * @return integer|null
     */
    public function getFileType(): ?int
    {
        $messages = $this->getMessages(MessageNumber::FileId);
        if (count($messages) !== 1) {
            return null;
        }

        /** @var FileIdMessage $fileIdMessage */
        $fileIdMessage = $messages[0];
        return $fileIdMessage->getType();
    }

    /**
     * Return all available messages numbers.
     *
     * @return array
     */
    public function getMessageNumbers(): array
    {
        return array_keys($this->messages);
    }

    /**
     * Gets all messages for the specified message number.
     */
    public function getMessages(int $messageNumber): array
    {
        return isset($this->messages[$messageNumber]) ? $this->messages[$messageNumber] : [];
    }

    /**
     * Adds a new mesage. Uses the class id of the message
     * as key.
     *
     * @param Message $message
     * @return void
     */
    public function addMessage(Message $message): void
    {
        $messageNumber = $message->getGlobalMessageNumber();
        if (isset($this->messages[$messageNumber])) {
            $this->messages[$messageNumber][] = $message;
        } else {
            $this->messages[$messageNumber] = [$message];
        }
    }

    /**
     * Returns the total message count.
     *
     * @return integer
     */
    public function count(): int
    {
        return count($this->messages, COUNT_RECURSIVE) - count($this->messages);
    }

    /**
     * Gets an iterator.
     *
     * {@inheritDoc}
     * @see IteratorAggregate::getIterator()
     */
    public function getIterator(): Traversable
    {
        return new RecursiveArrayIterator($this->messages, RecursiveArrayIterator::CHILD_ARRAYS_ONLY);
    }
}
