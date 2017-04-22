<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

class DeleteResourceFailedException extends UnprocessableEntityException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-DELETE-RESOURCE-FAILED'): void
    {
        parent::__construct($message, $errorCode, 422);
    }
}
