<?php

namespace BrianFaust\Exceptions\Standards\Logic;

use BrianFaust\Exceptions\Standards\LogicException;

class InvalidArgumentException extends LogicException
{
    public function __construct($message = null, $errorCode = 'ERR-INVALID-ARGUMENT', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
