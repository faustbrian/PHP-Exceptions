<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NetworkReadTimeoutErrorException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-NETWORK-READ-TIMEOUT-ERROR')
    {
        parent::__construct($message, $errorCode, 598);
    }
}
