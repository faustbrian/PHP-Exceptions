<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NotImplementedException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-NOT-IMPLEMENTED')
    {
        parent::__construct($message, $errorCode, 501);
    }
}
