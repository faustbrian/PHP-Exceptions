<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class UnprocessableEntityException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-UNPROCESSABLE-ENTITY')
    {
        parent::__construct($message, $errorCode, 422);
    }
}
