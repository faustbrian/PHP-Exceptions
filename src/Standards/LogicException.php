<?php

namespace BrianFaust\Exceptions\Standards;

class LogicException extends Exception
{
    public function __construct(?string $message, ?string $errorCode, ?int $statusCode)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
