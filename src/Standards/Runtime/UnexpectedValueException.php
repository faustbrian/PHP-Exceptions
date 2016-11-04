<?php

namespace BrianFaust\Exceptions\Standards\Runtime;

use BrianFaust\Exceptions\Standards\RuntimeException;

class UnexpectedValueException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-UNEXPECTED-VALUE', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
