<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class PreconditionRequiredException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-PRECONDITION-REQUIRED')
    {
        parent::__construct($message, $errorCode, 428);
    }
}
