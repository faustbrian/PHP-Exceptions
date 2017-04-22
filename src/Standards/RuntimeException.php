<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Standards;

class RuntimeException extends Exception
{
    public function __construct(?string $message, ?string $errorCode, ?int $statusCode): void
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
