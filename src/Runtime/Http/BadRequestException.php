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

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class BadRequestException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-BAD-REQUEST'): void
    {
        parent::__construct($message, $errorCode, 400);
    }
}
