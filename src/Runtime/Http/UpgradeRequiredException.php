<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class UpgradeRequiredException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-UPGRADE-REQUIRED')
    {
        parent::__construct($message, $errorCode, 426);
    }
}
