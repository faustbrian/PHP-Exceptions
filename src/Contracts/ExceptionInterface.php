<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Contracts;

interface ExceptionInterface
{
    public function getErrorCode(): string;

    public function setErrorCode($errorCode): void;

    public function getStatusCode(): int;

    public function setStatusCode($statusCode): void;
}
