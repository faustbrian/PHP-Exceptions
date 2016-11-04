<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class RequestedRangeNotSatisfiableException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-REQUESTED-RANGE-NOT-SATISFIABLE')
    {
        parent::__construct($message, $errorCode, 416);
    }
}
