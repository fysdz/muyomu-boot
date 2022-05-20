<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\injection\impl;

interface Injection
{
    public function AutoInjection(string $className):object;
}