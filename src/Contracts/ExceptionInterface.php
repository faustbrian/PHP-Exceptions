<?php


declare(strict_types=1);

/*
 * This file is part of PHP Exceptions.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Exceptions\Contracts;

interface ExceptionInterface
{
    public function getErrorCode(): string;

    public function setErrorCode($errorCode): void;

    public function getStatusCode(): int;

    public function setStatusCode($statusCode): void;
}
