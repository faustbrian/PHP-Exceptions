<?php

namespace BrianFaust\Exceptions\Standards\Runtime;

use BrianFaust\Exceptions\Standards\RuntimeException;

class RangeException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-INVALID-RANGE', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
