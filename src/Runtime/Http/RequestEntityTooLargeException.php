<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class RequestEntityTooLargeException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-REQUEST-ENTITY-TOO-LARGE')
    {
        parent::__construct($message, $errorCode, 413);
    }
}
