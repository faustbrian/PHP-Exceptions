<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class BandwidthLimitExceededException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-BANDWIDTH-LIMIT-EXCEEDED')
    {
        parent::__construct($message, $errorCode, 509);
    }
}
