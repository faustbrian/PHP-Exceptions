<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class RequestHeaderFieldsTooLargeException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-REQUEST-HEADER-FIELDS-TOO-LARGE')
    {
        parent::__construct($message, $errorCode, 431);
    }
}
