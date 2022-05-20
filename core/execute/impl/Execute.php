<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\execute\impl;

interface Execute
{
    public function MethodInvoke($instance,$method,$methodParameters):mixed;
}