<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class EnhanceYourCalmException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-ENHANCE-YOUR-CALM')
    {
        parent::__construct($message, $errorCode, 420);
    }
}
