<?php

namespace BrianFaust\Exceptions\Logic;

use BrianFaust\Exceptions\Standards\Logic\InvalidArgumentException;

class FormatException extends InvalidArgumentException
{
    public function __construct(?string $message, ?string $errorCode, ?int $statusCode)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
