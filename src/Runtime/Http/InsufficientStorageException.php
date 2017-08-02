<?php

/*
 * This file is part of PHP Exceptions.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class InsufficientStorageException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-INSUFFICIENT-STORAGE')
    {
        parent::__construct($message, $errorCode, 507);
    }
}
