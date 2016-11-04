<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class LockedException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-LOCKED-EXCEPTION')
    {
        parent::__construct($message, $errorCode, 423);
    }
}
