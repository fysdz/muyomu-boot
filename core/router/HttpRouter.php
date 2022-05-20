<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\router;

use boot\config\RouterConfigEntrance;
use boot\core\router\impl\Router;
use JetBrains\PhpStorm\Pure;

class HttpRouter implements Router
{
    private RouterConfigEntrance $routerConfigEntrance;

    #[Pure] public function __construct(){
        $this->routerConfigEntrance = new RouterConfigEntrance();
    }

    public function RouterHandle(): array
    {
        return $this->routerConfigEntrance->getRouteMeat($_SERVER['REQUEST_URI']);
    }
}