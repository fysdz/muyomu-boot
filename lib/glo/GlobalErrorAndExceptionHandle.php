<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\lib\glo;

use JetBrains\PhpStorm\NoReturn;

class GlobalErrorAndExceptionHandle
{
    #[NoReturn] public static function global_error_handle($errno, $errorStr, $errorFile, $errorLine):void
    {
        echo $errorStr;
        die();
    }

    #[NoReturn] public static function global_exception_handle($e):void
    {
        echo $e->getMessage();
        die();
    }
}