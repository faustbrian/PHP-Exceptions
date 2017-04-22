<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class NotFoundException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-NOT-FOUND'): void
    {
        parent::__construct($message, $errorCode, 404);
    }
}
