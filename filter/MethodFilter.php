<?php
/**
 * User: liumutian
 * Date: 2022/5/19/019
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\filter;

use boot\core\http\HttpRequest;
use boot\core\http\HttpResponse;
use boot\core\security\impl\Security;

class MethodFilter implements Security
{

    public function doFilter(HttpRequest $httpRequest, HttpResponse $httpResponse): bool
    {
        // TODO: Implement doFilter() method.
    }
}