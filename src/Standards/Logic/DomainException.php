<?php

namespace BrianFaust\Exceptions\Standards\Logic;

use BrianFaust\Exceptions\Standards\LogicException;

class DomainException extends LogicException
{
    public function __construct($message = null, $errorCode = 'ERR-INVALID-DOMAIN', $statusCode = null)
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
