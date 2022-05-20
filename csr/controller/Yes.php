<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\csr\controller;

use boot\core\rpc\httpRpc\RemoteCall;

#
interface Yes extends RemoteCall
{
    public function service();
}