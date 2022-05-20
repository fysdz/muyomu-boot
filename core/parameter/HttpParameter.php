<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\parameter;

use boot\core\notation\RequestParam;
use ReflectionClass;
use ReflectionException;

class HttpParameter
{
    /**
     * @throws ReflectionException
     */
    public function parameterResolveHandle(string $className, string $method):array{

        $ReflectClass = new ReflectionClass($className);

        $ReflectMethod = $ReflectClass->getMethod($method);

        $parameters = $ReflectMethod->getParameters();

        $Values = array();

        foreach ($parameters as $parameter){

            int:$position = $parameter->getPosition();

            ReflectionAttribute:$attribute = $parameter->getAttributes(RequestParam::class)[0];

            $attributeName = $attribute->getName();

            $attributeInstance = $attribute->newInstance();

            $name = $attributeInstance->getNmae();

            $required = $attributeInstance->getRequired();

            if ($required){
                if ($_SERVER['REQUEST_METHOD'] == "get"){

                }else{

                }
            }else{

            }
        }

        return $Values;
    }
}