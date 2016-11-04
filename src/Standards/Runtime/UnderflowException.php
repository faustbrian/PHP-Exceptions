<?php

namespace BrianFaust\Exceptions\Standards\Runtime;

use BrianFaust\Exceptions\Standards\RuntimeException;

class UnderflowException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-UNDERFLOW', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
