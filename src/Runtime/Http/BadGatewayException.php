<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class BadGatewayException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-BAD-GATEWAY'): void
    {
        parent::__construct($message, $errorCode, 502);
    }
}
