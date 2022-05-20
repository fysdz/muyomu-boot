<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\auth;

use boot\config\SecurityRealmEntrance;
use boot\core\security\impl\SecurityPermissionsAuthorizationFilter;

class SecurityPermissionAuthorization implements SecurityPermissionsAuthorizationFilter
{
    private SecurityRealmEntrance $securityRealmEntrance;

    public function __construct(SecurityRealmEntrance $securityRealmEntrance){
        $this->securityRealmEntrance = $securityRealmEntrance;
    }

    public function verifyPermissions(): void
    {
        $permissions = $this->securityRealmEntrance->doAuthorization()['permissions'];
    }
}