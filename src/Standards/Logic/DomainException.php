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

namespace BrianFaust\Exceptions\Standards\Logic;

use BrianFaust\Exceptions\Standards\LogicException;

class DomainException extends LogicException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-INVALID-DOMAIN', ?int $statusCode): void
    {
        parent::__construct($message, $errorCode, $statusCode);
    }
}
