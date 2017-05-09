<?php

namespace Ddeboer\Imap\Exception;

class MessageSaveException extends Exception
{
    public function __construct($messageNumber)
    {
        parent::__construct(sprintf('Message %s cannot be saved', $messageNumber));
    }
}
