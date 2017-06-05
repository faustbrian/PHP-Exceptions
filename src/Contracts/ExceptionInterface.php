<?php

namespace BrianFaust\Exceptions\Contracts;

interface ExceptionInterface
{
    public function getErrorCode(): string;

    public function setErrorCode($errorCode);

    public function getStatusCode(): int;

    public function setStatusCode($statusCode);
}
