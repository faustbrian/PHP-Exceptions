<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class FailedDependencyException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-FAILED-DEPENDENCY')
    {
        parent::__construct($message, $errorCode, 424);
    }
}
