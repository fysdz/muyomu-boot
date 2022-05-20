<?php
/**
 * User: liumutian
 * Date: 2022/5/16/016
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\rpc\httpRpc;

use ReflectionClass;

interface HttpRemote
{
    public function remoteOfCall(ReflectionClass $remoteConfig, array $value=null);

    public function remoteOfApply(ReflectionClass $remoteConfig,... $value);
}