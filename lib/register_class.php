<?php
/**
 * Created by PhpStorm.
 * User: kidjourney
 * Date: 6/8/15
 * Time: 9:39 PM
 */

require_once('wechat_common.php');
require_once('db_common.php');

class register {
    private $mysqliwoker ;

    function  __construct(){
        $this->mysqliwoker = sqliconnect();
    }

    function register(){
        $useropenid = $_SESSION['u_openid'];
        $query ="INSERT INTO user (u_openid , u_nick) VALUES ('%s','%s');";
        $query = sprintf($query,$_SESSION['u_openid'] , $_SESSION['u_nick']);
        $this->mysqliwoker->query(query);
        
    }
}