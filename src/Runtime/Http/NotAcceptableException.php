<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NotAcceptableException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-NOT-ACCEPTABLE')
    {
        parent::__construct($message, $errorCode, 406);
    }
}
