<?php

namespace BrianFaust\Exceptions\Runtime\Http;

class ReadResourceFailedException extends UnprocessableEntityException
{
    public function __construct($message = null, $errorCode = 'ERR-READ-RESOURCE-FAILED')
    {
        parent::__construct($message, $errorCode, 422);
    }
}
