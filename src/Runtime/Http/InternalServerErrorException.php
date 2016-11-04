<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class InternalServerErrorException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-INTERNAL-SERVER-ERROR')
    {
        parent::__construct($message, $errorCode, 500);
    }
}
