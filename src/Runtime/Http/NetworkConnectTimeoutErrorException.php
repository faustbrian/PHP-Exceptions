<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NetworkConnectTimeoutErrorException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-NETWORK-CONNECTION-TIMEOUT-ERROR')
    {
        parent::__construct($message, $errorCode, 599);
    }
}
