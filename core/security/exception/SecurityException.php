<?php
/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\security\exception;

use JetBrains\PhpStorm\Internal\LanguageLevelTypeAware;
use JetBrains\PhpStorm\Pure;

class SecurityException extends \Exception
{
    #[Pure] public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}