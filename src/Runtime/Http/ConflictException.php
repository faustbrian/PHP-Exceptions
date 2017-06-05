<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class ConflictException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-CONFLICT')
    {
        parent::__construct($message, $errorCode, 409);
    }
}
