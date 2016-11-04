<?php

namespace BrianFaust\Exceptions\Standards\Logic;

use BrianFaust\Exceptions\Standards\LogicException;

class BadMethodCallException extends LogicException
{
    public function __construct($message = null, $errorCode = 'ERR-BAD-METHOD-CALL', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
