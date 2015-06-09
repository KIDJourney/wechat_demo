<?php
/**
 * @Author: kidjourney
 * @Date:   2015-06-08 16:39:50
 * @Last Modified by:   kidjourney
 * @Last Modified time: 2015-06-08 23:12:24
 */
require_once("lib/db_common.php");
require_once("lib/wechat_common.php");

class userinfo {
    private $user_code;
    private $user_access_url;
    private $user_access;
    private $user_info_url;
    private $user_info;

    function __construct($code){
        $this->user_code = $code;
        $this->user_access_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=%s&secret=%s&code=%s&grant_type=authorization_code";
        $this->user_access_url = sprintf($this->user_access_url,APPID,APPSECRET,$this->user_code);
    }

    function get_user_access(){
        $this->user_access = json_decode(file_get_contents($this->user_access_url) , True);
    }

    function get_user_info(){
        $user_access_token = $this->user_access['access_token'];
        $user_access_openid = $this->user_access['openid'];        
        $this->user_info_url = "https://api.weixin.qq.com/sns/userinfo?access_token=%s&openid=%s&lang=zh_CN";
        $this->user_info_url = sprintf($this->user_info_url,$user_access_token,$user_access_openid);
        $this->user_info = json_decode(file_get_contents($this->user_info_url) , True);
    }

    function return_user_info(){
        $this->get_user_access();
        $this->get_user_info();
        return $this->user_info;
    }

//    function show(){
//        echo "Your user code ";
//        print_r($this->user_code);
//        echo "<br>Your acess info";
//        print_r($this->user_access);
//        echo "<br>Your info";
//        print_r($this->user_info);
//    }

}