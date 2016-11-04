<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class IAmATeapotException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-I-AM-A-TEAPOT')
    {
        parent::__construct($message, $errorCode, 418);
    }
}
