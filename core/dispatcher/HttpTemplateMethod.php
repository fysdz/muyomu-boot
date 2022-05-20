<?php
/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\dispatcher;

use boot\core\execute\HttpExecute;
use boot\core\http\HttpRequest;
use boot\core\http\HttpResponse;
use boot\core\injection\HttpInjection;
use boot\core\parameter\HttpParameter;
use boot\core\security\exception\SecurityException;
use boot\core\security\HttpSecurity;
use boot\core\router\HttpRouter;
use JetBrains\PhpStorm\Pure;
use ReflectionException;

class HttpTemplateMethod implements impl\HttpTemplateMethod
{
    private HttpSecurity $httpSecurity;

    private HttpRouter $httpRouter;

    private HttpInjection $httpInjection;

    private HttpParameter $httpParameter;

    private HttpExecute $httpExecute;

    #[Pure] public function __construct()
    {
        $this->httpSecurity = new HttpSecurity();
        $this->httpRouter = new HttpRouter();
        $this->httpInjection = new HttpInjection();
        $this->httpParameter = new HttpParameter();
        $this->httpExecute = new HttpExecute();
    }

    /**
     * @throws ReflectionException
     * @throws SecurityException
     */
    public function doSecurity(HttpRequest $httpRequest, HttpResponse $httpResponse): void
    {
        $this->httpSecurity->AccessControl($httpRequest,$httpResponse);
    }

    public function doRouter(): array
    {
        return $this->httpRouter->RouterHandle();
    }

    /**
     * @throws ReflectionException
     */
    public function doInjection(string $controller): object
    {
        return $this->httpInjection->AutoInjection($controller);
    }

    /**
     * @throws ReflectionException
     */
    public function doParameter(object $controller, string $method): array
    {
        return $this->httpParameter->parameterResolveHandle($controller,$method);
    }

    /**
     * @throws ReflectionException
     */
    public function doExecute(object $instance, string $method, array $strict): mixed
    {
        return $this->httpExecute->MethodInvoke($instance,$method,$strict);
    }

    public function doResponse(mixed $value): void
    {
        // TODO: Implement doResponse() method.
    }
}