<?php
/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\config;

use boot\core\auth\UserPasswordToken;
use boot\core\security\impl\SecurityRealm;

class SecurityRealmEntrance implements SecurityRealm
{

    public function doAuthorization(): array
    {
        // TODO: Implement doAuthorization() method.
    }

    public function doAuthentication(): UserPasswordToken
    {
        // TODO: Implement doAuthentication() method.
    }
}