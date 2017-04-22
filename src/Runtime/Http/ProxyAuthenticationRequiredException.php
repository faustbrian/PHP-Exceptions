<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class ProxyAuthenticationRequiredException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-PROXY-AUTHENTICATION-REQUIRED'): void
    {
        parent::__construct($message, $errorCode, 407);
    }
}
