<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

class UpdateResourceFailedException extends UnprocessableEntityException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-UPDATE-RESOURCE-FAILED'): void
    {
        parent::__construct($message, $errorCode, 422);
    }
}
