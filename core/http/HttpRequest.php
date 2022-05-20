<?php
/**
 * User: liumutian
 * Date: 2022/5/14/014
 * Email: <bhfqlz@outlook.com>
 */

namespace boot\core\http;

class HttpRequest
{
    private ApplicationContext $applicationContext;

    private Session $session;

    public function __construct(ApplicationContext $applicationContext,Session $session){
        $this->applicationContext = $applicationContext;
        $this->session = $session;
    }

    /**
     * @return ApplicationContext
     */
    public function getApplicationContext(): ApplicationContext
    {
        return $this->applicationContext;
    }

    /**
     * @return Session
     */
    public function getSession(): Session
    {
        return $this->session;
    }

}