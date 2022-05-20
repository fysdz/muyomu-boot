<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\auth;

class UserPasswordToken
{
    private string $clientPassword;

    private string $serverPassword;

    /**
     * @return string
     */
    public function getClientPassword(): string
    {
        return $this->clientPassword;
    }

    /**
     * @param string $clientPassword
     */
    public function setClientPassword(string $clientPassword): void
    {
        $this->clientPassword = $clientPassword;
    }

    /**
     * @return string
     */
    public function getServerPassword(): string
    {
        return $this->serverPassword;
    }

    /**
     * @param string $serverPassword
     */
    public function setServerPassword(string $serverPassword): void
    {
        $this->serverPassword = $serverPassword;
    }


}