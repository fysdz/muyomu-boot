<?php
/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\security;

class SecurityConfig
{
    protected array $configDatabase;

    /**
     * @return array
     */
    public function getConfigDatabase(): array
    {
        return $this->configDatabase;
    }
}