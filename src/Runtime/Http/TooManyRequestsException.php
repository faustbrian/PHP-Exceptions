<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class TooManyRequestsException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-TOO-MANY-REQUESTS'): void
    {
        parent::__construct($message, $errorCode, 429);
    }
}
