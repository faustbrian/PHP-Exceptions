<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NotAcceptableException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-NOT-ACCEPTABLE')
    {
        parent::__construct($message, $errorCode, 406);
    }
}
