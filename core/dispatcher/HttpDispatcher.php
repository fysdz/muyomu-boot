<?php

namespace boot\core\dispatcher;

use boot\core\http\HttpRequest;
use boot\core\http\HttpResponse;
use Exception;
use JetBrains\PhpStorm\Pure;

/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */
class HttpDispatcher extends AbstractDispatcher
{
    /**
     * @meta static method to get object
     */
    public static function getHttpDispatcher():HttpDispatcher{
        return new HttpDispatcher();
    }

    private HttpTemplateMethod $httpTemplateMethod;

    #[Pure] private function __construct()
    {
        $this->httpTemplateMethod = new HttpTemplateMethod();
    }

    public function handle(HttpRequest $httpRequest,HttpResponse $httpResponse): void
    {
        try {
            $this->httpTemplateMethod->doSecurity($httpRequest,$httpResponse);
        }catch (Exception $e){
            echo $e->getMessage();
            die();
        }

        try {
            $router = $this->httpTemplateMethod->doRouter();
        }catch (Exception $e){
            echo $e->getMessage();
            die();
        }

        try {
            object:$instance = $this->httpTemplateMethod->doInjection($router['controller']);
        }catch (Exception $e){
            echo $e->getMessage();
            die();
        }

        try {
            $methodParameters = $this->httpTemplateMethod->doParameter($instance,$router['method']);
        }catch (Exception $e){
            echo $e->getMessage();
            die();
        }

        try {
            mixed:$value = $this->httpTemplateMethod->doExecute($instance,$router['method'],$methodParameters);
        }catch (Exception $e){
            echo $e->getMessage();
            die();
        }

        try {
            $this->httpTemplateMethod->doResponse($value);
        }catch (Exception $e){
            echo $e->getMessage();
            die();
        }
    }
}