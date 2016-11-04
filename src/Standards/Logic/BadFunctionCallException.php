<?php

namespace BrianFaust\Exceptions\Standards\Logic;

use BrianFaust\Exceptions\Standards\LogicException;

class BadFunctionCallException extends LogicException
{
    public function __construct($message = null, $errorCode = 'ERR-BAD-FUNCTION-CALL', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
