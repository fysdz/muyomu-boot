<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\auth;

use boot\config\SecurityRealmEntrance;
use boot\core\security\impl\SecurityRolesAuthorizationFilter;

class SecurityRolesAuthorization implements SecurityRolesAuthorizationFilter
{
    private SecurityRealmEntrance $securityRealmEntrance;

    public function __construct(SecurityRealmEntrance $securityRealmEntrance){
        $this->securityRealmEntrance = $securityRealmEntrance;
    }

    public function verifyRoles(): void
    {
        $roles = $this->securityRealmEntrance->doAuthorization()['roles'];
    }
}