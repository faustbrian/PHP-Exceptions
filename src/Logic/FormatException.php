<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Logic;

use BrianFaust\Exceptions\Standards\Logic\InvalidArgumentException;

class FormatException extends InvalidArgumentException
{
    public function __construct(?string $message, ?string $errorCode, ?int $statusCode): void
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
