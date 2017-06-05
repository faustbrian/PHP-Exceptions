<?php

namespace BrianFaust\Exceptions\Standards\Runtime;

use BrianFaust\Exceptions\Standards\RuntimeException;

class UnexpectedValueException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode, ?int $statusCode)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
