<?php

namespace BrianFaust\Exceptions\Runtime\Http;

class ReadResourceFailedException extends UnprocessableEntityException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-READ-RESOURCE-FAILED')
    {
        parent::__construct($message, $errorCode, 422);
    }
}
