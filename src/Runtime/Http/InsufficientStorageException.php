<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class InsufficientStorageException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-INSUFFICIENT-STORAGE')
    {
        parent::__construct($message, $errorCode, 507);
    }
}
