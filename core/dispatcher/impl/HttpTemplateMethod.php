<?php
/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\dispatcher\impl;

use boot\core\http\HttpRequest;
use boot\core\http\HttpResponse;

interface HttpTemplateMethod
{
    public function doSecurity(HttpRequest $httpRequest,HttpResponse $httpResponse):void;

    public function doRouter():array;

    public function doInjection(string $controller):object;

    public function doParameter(object $controller,string $method):array;

    public function doExecute(object $instance,string $method,array $strict):mixed;

    public function doResponse(mixed $value):void;
}