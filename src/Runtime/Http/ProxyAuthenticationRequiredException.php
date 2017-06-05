<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class ProxyAuthenticationRequiredException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-PROXY-AUTHENTICATION-REQUIRED')
    {
        parent::__construct($message, $errorCode, 407);
    }
}
