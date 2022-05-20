<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\dataBase;

use boot\core\dataBase\impl\SqlImpl;

class SqlConfig implements SqlImpl
{
    protected array $database;

    public function getHostname(string $db): string
    {
        // TODO: Implement getHostname() method.
    }

    public function getUsername(string $db): string
    {
        // TODO: Implement getUsername() method.
    }

    public function getPassword(string $db): string
    {
        // TODO: Implement getPassword() method.
    }

    public function getDatabase(string $db): string
    {
        // TODO: Implement getDatabase() method.
    }
}