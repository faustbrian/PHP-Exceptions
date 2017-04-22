<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime;

use BrianFaust\Exceptions\Standards\Runtime\UnexpectedValueException;

class NullValueException extends UnexpectedValueException
{
    public function __construct(?string $message, ?string $errorCode, ?int $statusCode): void
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
