<?php

namespace BrianFaust\Exceptions\Standards;

class LogicException extends Exception
{
    public function __construct($message = null, $errorCode = 'ERR-LOGIC', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
