<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

class AccessDeniedException extends ForbiddenException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-ACCESS-DENIED'): void
    {
        parent::__construct($message, $errorCode, 403);
    }
}
