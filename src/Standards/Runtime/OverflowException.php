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

namespace BrianFaust\Exceptions\Standards\Runtime;

use BrianFaust\Exceptions\Standards\RuntimeException;

class OverflowException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-OVERFLOW', ?int $statusCode): void
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
