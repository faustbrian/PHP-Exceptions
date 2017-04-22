<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Standards\Logic;

use BrianFaust\Exceptions\Standards\LogicException;

class DomainException extends LogicException
{
    public function __construct(?string $message, ?string $errorCode, ?int $statusCode): void
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
