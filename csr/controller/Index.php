<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\csr\controller;


use boot\lib\attribute\Value;
use boot\lib\attribute\ViewController;

#[ViewController]
class Index
{
    #[Value("liuzhang")]
    private string $name;

    public function hello():void{

    }
}