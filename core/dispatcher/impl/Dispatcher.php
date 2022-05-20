<?php

namespace boot\core\dispatcher\impl;

use boot\core\http\ApplicationContext;
use boot\core\http\HttpRequest;
use boot\core\http\HttpResponse;

/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */
interface Dispatcher
{
    public function handle(HttpRequest $httpRequest,HttpResponse $httpResponse):void;
}