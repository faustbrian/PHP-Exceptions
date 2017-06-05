<?php

namespace BrianFaust\Exceptions\Standards\Logic;

use BrianFaust\Exceptions\Standards\LogicException;

class LengthException extends LogicException
{
    public function __construct(?string $message, ?string $errorCode, ?int $statusCode)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
