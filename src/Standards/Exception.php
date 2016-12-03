<?php

/*
 * This file is part of PHP Exceptions.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Exceptions\Standards;

use BrianFaust\Exceptions\Contracts\ExceptionInterface;

class Exception extends \Exception implements ExceptionInterface
{
    protected $errorCode;

    protected $statusCode;

    protected $headers;

    public function __construct(?string $message = 'An error occured.', ?string $errorCode = null, ?int $statusCode): void
    {
        parent::__construct($message);

        if (!is_null($statusCode)) {
            $this->setStatusCode($statusCode);
        }

        if (!is_null($errorCode)) {
            $this->setErrorCode($errorCode);
        }
    }

    public function setErrorCode($errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function setStatusCode($statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    public function getStatusCode(): string
    {
        return $this->statusCode;
    }
}
