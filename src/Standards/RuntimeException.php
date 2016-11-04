<?php

namespace BrianFaust\Exceptions\Standards;

class RuntimeException extends Exception
{
    public function __construct($message = null, $errorCode = 'ERR-RUNTIME', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
