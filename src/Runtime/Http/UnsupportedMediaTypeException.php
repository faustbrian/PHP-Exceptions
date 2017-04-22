<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class UnsupportedMediaTypeException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-UNSUPPORTED-MEDIA-TYPE'): void
    {
        parent::__construct($message, $errorCode, 415);
    }
}
