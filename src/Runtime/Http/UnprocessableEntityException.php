<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class UnprocessableEntityException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-UNPROCESSABLE-ENTITY')
    {
        parent::__construct($message, $errorCode, 422);
    }
}
