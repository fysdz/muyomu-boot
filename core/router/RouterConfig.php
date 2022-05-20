<?php
/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\router;

class RouterConfig implements impl\RouterConfig
{
    protected array $Router;

    public function getRouteMeat(string $uri): array
    {
        return $this->Router[$uri];
    }
}