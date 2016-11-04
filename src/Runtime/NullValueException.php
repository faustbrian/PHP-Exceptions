<?php

namespace BrianFaust\Exceptions\Runtime;

use BrianFaust\Exceptions\Standards\Runtime\UnexpectedValueException;

class NullValueException extends UnexpectedValueException
{
    public function __construct($message = null, $errorCode = 'ERR-NULL-VALUE', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
