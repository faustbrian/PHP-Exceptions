<?php



declare(strict_types=1);



namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class WrongExchangeServerException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-WRONG-EXCHANGE-SERVER'): void
    {
        parent::__construct($message, $errorCode, 451);
    }
}
