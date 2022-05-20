<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\dataBase\impl;

interface SqlImpl
{
    public function getHostname(string $db):string;

    public function getUsername(string $db):string;

    public function getPassword(string $db):string;

    public function getDatabase(string $db):string;
}