<?php
/**
 * Created by PhpStorm.
 * User: kidjourney
 * Date: 6/8/15
 * Time: 9:50 PM
 */
session_start();
require_once('lib/db_common.php');
require_once('lib/wechat_common.php');
require_once('lib/userinfo_class.php');
require_once('lib/http_common.php');

class userpage {

    private $sqliwoker ;
    private $user_info_getter;
    private $user_info_db;
    private $user_info_wechat;

    function __construct($code){
        $this->user_info_getter = new userinfo($code);
        $this->user_info_wechat = $this->user_info_getter->return_user_info();
        $this->sqliwoker = sqliconnect();
    }

    function check_user_inbase(){
        $user_openid = $this->user_info_wechat['openid'];
        $query = sprintf("SELECT * FROM user where u_openid='%s'" , $user_openid);
        $result = $this->sqliwoker->query($query);
        if ($row = $result->fetch_assoc()){
            $this->user_info_db = $row;
            return True;
            // If user is in database , return True , save the data in database; 
        } else {
            return False;
            // Else return false , the only data we get is the user_info_wechat
        }
    }

    function return_user_info_db(){
        return $this->user_info_db;
    }

    function return_user_info_wechat(){
        return $this->user_info_wechat;
    }


}