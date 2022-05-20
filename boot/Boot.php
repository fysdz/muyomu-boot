<?php

namespace boot\boot;

use boot\core\dispatcher\HttpDispatcher;
use boot\core\http\ApplicationContext;
use boot\core\http\HttpRequest;
use boot\core\http\HttpResponse;
use boot\core\http\Session;

/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */
class Boot
{
    public static function main():void{

        Boot:$boot = new Boot();

        //前置配置
        set_error_handler("\\boot\\lib\\glo\\GlobalErrorAndExceptionHandle::global_error_handle");

        set_exception_handler("\\boot\\lib\\glo\\GlobalErrorAndExceptionHandle::global_exception_handle");

        $boot->entry();
    }

    private HttpDispatcher $httpDispatcher;

    private HttpRequest $httpRequest;

    private HttpResponse $httpResponse;

    public function __construct(){
        $this->httpDispatcher = HttpDispatcher::getHttpDispatcher();
        $this->httpRequest = new HttpRequest(new ApplicationContext(),new Session());
        $this->httpResponse = new HttpResponse();
    }

    public function entry():void{
        $this->httpDispatcher->handle($this->httpRequest,$this->httpResponse);
    }
}