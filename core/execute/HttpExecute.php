<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\execute;

use boot\core\execute\impl\Execute;
use ReflectionClass;
use ReflectionException;

class HttpExecute implements Execute
{

    /**
     * @throws ReflectionException
     */
    public function MethodInvoke($instance, $method, $methodParameters): mixed
    {

        $ReflectClass = new ReflectionClass($instance);

        $ReflectMethod = $ReflectClass->getMethod($method);

        return $ReflectMethod->invokeArgs($instance,$methodParameters);
    }
}