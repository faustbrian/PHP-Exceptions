<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class UnauthorizedException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-UNAUTHORIZED')
    {
        parent::__construct($message, $errorCode, 401);
    }
}
