<?php

namespace BrianFaust\Exceptions\Standards\Runtime;

use BrianFaust\Exceptions\Standards\RuntimeException;

class OutOfBoundsException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-OUT-OF-BOUNDS', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
