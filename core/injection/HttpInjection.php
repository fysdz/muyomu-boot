<?php
namespace boot\core\injection;
use boot\core\injection\impl\Injection;
use ReflectionClass;
use ReflectionException;

/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */
class HttpInjection implements Injection
{

    /**
     * @throws ReflectionException
     */
    public function AutoInjection(string $className):object
    {
        ReflectionClass:$class = new ReflectionClass($className);

        return $class->newInstance();
    }
}