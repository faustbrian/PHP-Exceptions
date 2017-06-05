<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class PaymentRequiredException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-PAYMENT-REQUIRED')
    {
        parent::__construct($message, $errorCode, 402);
    }
}
