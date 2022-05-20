<?php
/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\config;

use boot\core\security\SecurityConfig;
use boot\core\security\SecurityMethod;
use boot\filter\PortFilter;
use JetBrains\PhpStorm\Pure;

class SecurityConfigEntrance extends SecurityConfig
{
    #[Pure] public function __construct(){
        //配置路由
        $this->configDatabase = [
            "/hello/tk"=>[
                new PortFilter(),
                new PortFilter()
            ]
        ];
    }
}