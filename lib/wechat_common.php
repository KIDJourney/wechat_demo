<?php
/**
 * @Author: kidjourney
 * @Date:   2015-06-08 14:49:01
 * @Last Modified by:   kidjourney
 * @Last Modified time: 2015-06-08 15:39:38
 */
require_once("wechat_info.php");
require_once("db_common.php");
function return_access_key() {
    $mysqli = sqliconnect();
    $result = $mysqli->query("SELECT * FROM access_token");
    if ($result = $result->fetch_assoc()){
        # if overtime , get new token and update the database then return the token
        if (strtotime($result['time']) - time() >7200){
            $token = update_access_key();  
            return $token;
        }
        
    } else {
        #do log 
    }

}

function get_access_key() {
    $url = sprintf("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s",APPID,APPSECRET);
    $response = file_get_contents($url);
    $result = json_decode($response);
    return $result[access_token];
}

function update_access_key(){
    $token = get_access_key();
    $mysqli = sqliconnect();
    $mysqli->query("UPDATE access_token set token = ".$token);
    $mysqli->close();
    return $toekn;
}