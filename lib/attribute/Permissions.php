<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\lib\attribute;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Permissions
{
    private array $permissions = [];

    private string $logical = "and";

    public function __construct(array $permissions,string $logical)
    {
        $this->permissions = $permissions;
        $this->logical = $logical;
    }

    /**
     * @return array
     */
    public function getPermissions(): array
    {
        return $this->permissions;
    }

    /**
     * @return string
     */
    public function getLogical(): string
    {
        return $this->logical;
    }


}