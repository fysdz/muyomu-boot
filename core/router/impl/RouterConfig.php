<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\router\impl;

interface RouterConfig
{
    public function getRouteMeat(string $uri):array;
}