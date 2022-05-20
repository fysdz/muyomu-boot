<?php

namespace boot\core\dispatcher;

use boot\core\dispatcher\impl\Dispatcher;
use boot\core\http\ApplicationContext;
use boot\core\http\HttpRequest;
use boot\core\http\HttpResponse;

/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */
abstract class AbstractDispatcher implements Dispatcher
{
    public function preHandle():void{}

    public function handle(HttpRequest $httpRequest,HttpResponse $httpResponse): void
    {
        // TODO: Implement handle() method.
    }

    public function AftHandle():void{}
}