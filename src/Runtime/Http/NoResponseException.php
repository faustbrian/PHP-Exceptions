<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NoResponseException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-NO-RESPONSE')
    {
        parent::__construct($message, $errorCode, 444);
    }
}
