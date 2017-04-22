<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class RequestEntityTooLargeException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-REQUEST-ENTITY-TOO-LARGE'): void
    {
        parent::__construct($message, $errorCode, 413);
    }
}
