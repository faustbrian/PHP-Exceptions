<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class ClientClosedRequestException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-CLIENT-CLOSED-REQUEST')
    {
        parent::__construct($message, $errorCode, 499);
    }
}
