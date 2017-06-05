<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class GoneException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-GONE')
    {
        parent::__construct($message, $errorCode, 410);
    }
}
