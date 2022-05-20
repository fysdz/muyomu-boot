<?php
/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\config;

use boot\core\router\RouterConfig;

class RouterConfigEntrance extends RouterConfig
{
    public function __construct(){
        $this->Router = [
            "/hello/tk"=>[
                "controller"=>"boot\csr\controller\Index",
                "method"=>"hello"
            ]
        ];
    }
}