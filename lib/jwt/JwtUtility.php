<?php


namespace boot\lib\jwt;


class JwtUtility
{

    /**
     * @var Jwt
     */
    private static $Jwt;

    /**
     * @param string $key
     */
    public static function setKey(string $key): void
    {
        self::$Jwt->setkey($key);
    }

    /**
     * @param string $iss
     */
    public static function setIss(string $iss): void
    {
        self::$Jwt->setIss($iss);
    }

    /**
     * @param int $iat
     */
    public static function setIat(int $iat): void
    {
        self::$Jwt->setIat($iat);
    }

    /**
     * @param int $exp
     */
    public static function setExp(int $exp): void
    {
        self::$Jwt->setExp($exp);
    }

    /**
     * @param int $nbf
     */
    public static function setNbf(int $nbf): void
    {
        self::$Jwt->setNbf($nbf);
    }

    /**
     * @param string $sub
     */
    public static function setSub(string $sub): void
    {
        self::$Jwt->setSub($sub);
    }

    /**
     * @param string $jti
     */
    public static function setJti(string $jti): void
    {
        self::$Jwt->setJti($jti);
    }

    /**
     * @param mixed $claim
     */
    public static function setClaim($claim): void
    {
        self::$Jwt->setClaim($claim);
    }

    /**
     * @return mixed
     */
    public static function getClaim()
    {
        return self::$Jwt->getClaim();
    }

    /**
     * @return int
     */
    public static function getExp(): int
    {
        return self::$Jwt->getExp();
    }

    /**
     *
     * init
     */
    public static function JwtInit(){
        self::$Jwt = new Jwt();
    }

    /**
     * 获取jwt token
     * @return string
     */
    public static function getToken()
    {
        return self::$Jwt->getToken();
    }


    /**
     * 验证token是否有效,默认验证exp,nbf,iat时间
     * @param string $Token 需要验证的token
     * @return bool|mixed
     */
    public static function verifyToken(string $Token)
    {
        return self::$Jwt->verifyToken($Token);
    }


    /**
     * HMACSHA256签名   https://jwt.io/  中HMACSHA256签名实现
     * @param string $input 为base64UrlEncode(header).".".base64UrlEncode(payload)
     * @param string $key
     * @param string $alg 算法方式
     * @return mixed
     */
}