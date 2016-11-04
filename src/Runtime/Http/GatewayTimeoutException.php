<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class GatewayTimeoutException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-GATEWAY-TIMEOUT')
    {
        parent::__construct($message, $errorCode, 504);
    }
}
