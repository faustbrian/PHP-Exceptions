<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class BadGatewayException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-BAD-GATEWAY')
    {
        parent::__construct($message, $errorCode, 502);
    }
}
