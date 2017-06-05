<?php

namespace BrianFaust\Exceptions\Runtime\Http;

class DeleteResourceFailedException extends UnprocessableEntityException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-DELETE-RESOURCE-FAILED')
    {
        parent::__construct($message, $errorCode, 422);
    }
}
