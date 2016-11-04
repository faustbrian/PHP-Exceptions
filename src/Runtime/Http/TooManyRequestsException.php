<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class TooManyRequestsException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-TOO-MANY-REQUESTS')
    {
        parent::__construct($message, $errorCode, 429);
    }
}
