<?php
/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\security;

use boot\config\SecurityConfigEntrance;
use boot\core\http\HttpRequest;
use boot\core\http\HttpResponse;
use boot\core\security\exception\SecurityException;
use JetBrains\PhpStorm\Pure;
use ReflectionClass;
use ReflectionException;

class HttpSecurity
{
    private SecurityConfigEntrance $securityConfigEntrance;

    #[Pure] public function __construct(){
        $this->securityConfigEntrance = new SecurityConfigEntrance();
    }

    /**
     * @throws ReflectionException
     * @throws SecurityException
     */
    public function accessControl(HttpRequest $httpRequest, HttpResponse $httpResponse):void{

        string:$uri = $_SERVER['REQUEST_URI'];

        $chains = $this->securityConfigEntrance->getConfigDatabase()[$uri];

        foreach ($chains as $chan){
            if(!$chan->doFilter($httpRequest,$httpResponse)){
                $temp = new ReflectionClass($chan);
                $exceptionName = $temp->getName();
                throw new SecurityException($exceptionName);
            }
        }
    }
}