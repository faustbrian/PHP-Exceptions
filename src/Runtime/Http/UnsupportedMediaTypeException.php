<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class UnsupportedMediaTypeException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-UNSUPPORTED-MEDIA-TYPE')
    {
        parent::__construct($message, $errorCode, 415);
    }
}
