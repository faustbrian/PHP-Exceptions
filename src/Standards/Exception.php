<?php

declare(strict_types=1);

/*
 * This file is part of PHP Exceptions.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
