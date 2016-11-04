<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NotExtendedException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-NOT-EXTENDED')
    {
        parent::__construct($message, $errorCode, 510);
    }
}
