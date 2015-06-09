<?php
session_start();

require_once('lib/userpage_class.php');
require_once('lib/http_common.php');

if (isset($_GET['code'])){
    $process = new userpage($_GET['code']);
    if ($process->check_user_inbase()){
        $user_info_db = $process->return_user_info_db();
        $_SESSION['registered'] = 1; //openid already save in session in userpage_class
        $_SESSION['u_openid'] = $user_info_db['u_openid'];
        $_SESSION['u_nick'] = $user_info_db['u_nick'];
        $_SESSION['u_info'] = $user_info_db['u_info'];
        redirect('show.php');
    } else {
        $user_info_wechat = $process->return_user_info_wechat();
        $_SESSION['registered'] = 0;
        $_SESSION['u_nick'] = $user_info_wechat['nickname'];
        $_SESSION['u_openid'] = $user_info_wechat['openid'];
        redirect('register.php');
    }
} 