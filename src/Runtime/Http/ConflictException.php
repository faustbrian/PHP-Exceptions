<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class ConflictException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-CONFLICT')
    {
        parent::__construct($message, $errorCode, 409);
    }
}
