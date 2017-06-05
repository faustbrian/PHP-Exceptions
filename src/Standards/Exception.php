<?php

namespace BrianFaust\Exceptions\Standards;

use BrianFaust\Exceptions\Contracts\ExceptionInterface;

class Exception extends \Exception implements ExceptionInterface
{
    protected $errorCode;

    protected $statusCode;

    protected $headers;

    public function __construct(?string $message, ?string $errorCode = null, ?int $statusCode)
    {
        parent::__construct($message);

        if (!is_null($statusCode)) {
            $this->setStatusCode($statusCode);
        }

        if (!is_null($errorCode)) {
            $this->setErrorCode($errorCode);
        }
    }

    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function getStatusCode(): string
    {
        return $this->statusCode;
    }
}
