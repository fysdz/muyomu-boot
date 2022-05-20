<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\parameter\impl;

use ReflectionParameter;

interface ParameterFilter
{
    public function isNotedByAttribute(ReflectionParameter $parameter):void;

    public function isMatchedWidthAttribute(ReflectionParameter $parameter):void;
}