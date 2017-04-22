<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class IAmATeapotException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-I-AM-A-TEAPOT'): void
    {
        parent::__construct($message, $errorCode, 418);
    }
}
