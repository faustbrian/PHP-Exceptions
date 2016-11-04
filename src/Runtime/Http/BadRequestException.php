<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class BadRequestException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-BAD-REQUEST')
    {
        parent::__construct($message, $errorCode, 400);
    }
}
