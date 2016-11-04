<?php

namespace BrianFaust\Exceptions\Logic;

use BrianFaust\Exceptions\Standards\Logic\InvalidArgumentException;

class FormatException extends InvalidArgumentException
{
    public function __construct($message = null, $errorCode = 'ERR-INVALID-FORMAT', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
