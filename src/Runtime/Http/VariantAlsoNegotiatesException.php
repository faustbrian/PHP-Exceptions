<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class VariantAlsoNegotiatesException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-VARIANT-ALSO-NEGOTIATES'): void
    {
        parent::__construct($message, $errorCode, 506);
    }
}
