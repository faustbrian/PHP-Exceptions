<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class InsufficientStorageException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-INSUFFICIENT-STORAGE'): void
    {
        parent::__construct($message, $errorCode, 507);
    }
}
