<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

class ReadResourceFailedException extends UnprocessableEntityException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-READ-RESOURCE-FAILED'): void
    {
        parent::__construct($message, $errorCode, 422);
    }
}
