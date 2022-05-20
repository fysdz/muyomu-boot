<?php
/**
 * User: liumutian
 * Date: 2022/5/16/016
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\rpc;

use boot\core\rpc\httpRpc\HttpRemote;
use ReflectionClass;

class HttpRemoteCall implements HttpRemote
{
    public function remoteOfCall(ReflectionClass $remoteConfig, array $value = null)
    {
        // TODO: Implement remoteOfCall() method.
    }

    public function remoteOfApply(ReflectionClass $remoteConfig, ...$value)
    {
        // TODO: Implement remoteOfApply() method.
    }
}