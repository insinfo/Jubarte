<?php
/**
 * Created by PhpStorm.
 * User: Isaque
 * Date: 20/01/2018
 * Time: 19:30
 */

namespace Jubarte\Model\BSL;
//business service layer
class ZimbraRedirect
{
    public static $PREAUTH_KEY = '43f3770241af418d4e3d54d3565d414432799eab9eb83b467fa49cc48bf1f109';
    public static $params = Array();
    public static $domain = 'riodasostras.rj.gov.br';

    public static function redirectURL($userName)
    {
        self::$domain = 'riodasostras.rj.gov.br';
        $timestamp = time() * 1000;

        self::$params['account'] = $userName;
        self::$params['by'] = 'name'; // needs to be part of hmac
        self::$params['timestamp'] = $timestamp;
        self::$params['expires'] = '0';

        $WEB_MAIL_PREAUTH_URL = "http://ostra.riodasostras.rj.gov.br/service/preauth";

        /**
         * User's email address and domain. In this example obtained from a GET query parameter.
         * i.e. preauthExample.php?email=user@domain.com&domain=domain.com
         * You could also parse the email instead of passing domain as a separate parameter
         */
        $user = self::$params['account'];
        $domain = self::$domain;

        $email = "{$user}@{$domain}";

        if (empty(self::$PREAUTH_KEY))
        {
            die("Need preauth key for domain " . $domain);
        }

        /**
         * Create preauth token and preauth URL
         */

        $preauthToken = hash_hmac('sha1', $email . '|' . self::$params["by"] . '|' . self::$params['expires'] . '|' . self::$params['timestamp'], self::$PREAUTH_KEY);
        $preauthURL = $WEB_MAIL_PREAUTH_URL . '?account=' . $email . '&by=' . self::$params['by'] . '&timestamp=' . self::$params['timestamp'] . '&expires=' . self::$params['expires'] . '&preauth=' . $preauthToken;

        /**
         * Redirect to Zimbra preauth URL
         */
        //header("Location: $preauthURL");
        //echo $preauthURL;
        return $preauthURL;
    }

}