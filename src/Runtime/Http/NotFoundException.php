<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NotFoundException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-NOT-FOUND')
    {
        parent::__construct($message, $errorCode, 404);
    }
}
