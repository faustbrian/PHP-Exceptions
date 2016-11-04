<?php

namespace BrianFaust\Exceptions\Runtime\Http;

class UpdateResourceFailedException extends UnprocessableEntityException
{
    public function __construct($message = null, $errorCode = 'ERR-UPDATE-RESOURCE-FAILED')
    {
        parent::__construct($message, $errorCode, 422);
    }
}
