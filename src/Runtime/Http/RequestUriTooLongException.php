<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class RequestUriTooLongException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-REQUEST-URI-TOO-LONG')
    {
        parent::__construct($message, $errorCode, 414);
    }
}
