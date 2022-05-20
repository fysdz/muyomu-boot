<?php
/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\config;

use boot\core\dataBase\SqlConfig;

class DataBaseConfigEntrance extends SqlConfig
{
    public function __construct(){
        $this->database = [
            "default"=>[
                "hostname"=>"localhost",
                "username"=>"root",
                "password"=>"root",
                "db"=>"test"
            ]
        ];
    }
}