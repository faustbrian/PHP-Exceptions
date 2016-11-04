<?php

namespace BrianFaust\Exceptions\Contracts;

interface ExceptionInterface
{
    public function getErrorCode();

    public function setErrorCode($errorCode);

    public function getStatusCode();

    public function setStatusCode($statusCode);
}
