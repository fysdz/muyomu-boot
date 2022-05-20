<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\lib\attribute;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Value
{
    private mixed $value;

    public function __construct(string | int | float | bool $value)
    {
        $this->value = $value;
    }

    /**
     * @return bool|float|int|mixed|string
     */
    public function getValue(): mixed
    {
        return $this->value;
    }


}