<?php

namespace BrianFaust\Exceptions\Standards\Logic;

use BrianFaust\Exceptions\Standards\LogicException;

class OutOfRangeException extends LogicException
{
    public function __construct($message = null, $errorCode = 'ERR-OUT-OF-RANGE', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
