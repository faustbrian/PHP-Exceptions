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

namespace BrianFaust\Exceptions\Logic;

use BrianFaust\Exceptions\Standards\Logic\InvalidArgumentException;

class FormatException extends InvalidArgumentException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-INVALID-FORMAT', ?int $statusCode): void
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
