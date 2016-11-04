<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class ForbiddenException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-FORBIDDEN')
    {
        parent::__construct($message, $errorCode, 403);
    }
}
