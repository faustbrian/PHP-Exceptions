<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class GatewayTimeoutException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-GATEWAY-TIMEOUT'): void
    {
        parent::__construct($message, $errorCode, 504);
    }
}
