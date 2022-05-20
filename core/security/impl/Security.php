<?php
/**
 * User: liumutian
 * Date: 2022/5/13/013
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\security\impl;

use boot\core\http\HttpRequest;
use boot\core\http\HttpResponse;

interface Security
{
    public function doFilter(HttpRequest $httpRequest,HttpResponse $httpResponse):bool;
}