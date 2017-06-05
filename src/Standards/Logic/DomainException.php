<?php

namespace BrianFaust\Exceptions\Standards\Logic;

use BrianFaust\Exceptions\Standards\LogicException;

class DomainException extends LogicException
{
    public function __construct(?string $message, ?string $errorCode, ?int $statusCode)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
