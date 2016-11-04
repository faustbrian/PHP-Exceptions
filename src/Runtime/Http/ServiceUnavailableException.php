<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class ServiceUnavailableException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-SERVICE-UNAVAILABLE')
    {
        parent::__construct($message, $errorCode, 503);
    }
}
