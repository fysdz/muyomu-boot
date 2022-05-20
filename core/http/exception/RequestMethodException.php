<?php

use JetBrains\PhpStorm\Pure;

/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */
class RequestMethodException extends Exception
{
    #[Pure] public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}