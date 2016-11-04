<?php

namespace BrianFaust\Exceptions\Standards\Runtime;

use BrianFaust\Exceptions\Standards\RuntimeException;

class OverflowException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-OVERFLOW', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
