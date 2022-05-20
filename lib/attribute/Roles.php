<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\lib\attribute;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class Roles
{
    private array $roles = [];

    private string $logical = "and";

    public function __construct(array $roles,string $logical){
        $this->roles = $roles;
        $this->logical = $logical;
    }

    /**
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * @return string
     */
    public function getLogical(): string
    {
        return $this->logical;
    }


}