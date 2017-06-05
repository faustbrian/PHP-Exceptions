<?php

namespace BrianFaust\Exceptions\Runtime\Http;

class AccessDeniedException extends ForbiddenException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-ACCESS-DENIED')
    {
        parent::__construct($message, $errorCode, 403);
    }
}
