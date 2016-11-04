<?php

namespace BrianFaust\Exceptions\Standards\Logic;

use BrianFaust\Exceptions\Standards\LogicException;

class LengthException extends LogicException
{
    public function __construct($message = null, $errorCode = 'ERR-INVALID-LENGTH', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
