<?php
/**
 * @Author: kidjourney
 * @Date:   2015-06-08 14:40:35
 * @Last Modified by:   kidjourney
 * @Last Modified time: 2015-06-08 18:08:39
 */
require_once("lib/db_common.php");
require_once("lib/wechat_common.php");
require_once("lib/userinfo_class.php");

if (!isset($_GET['code'])){
    die ("no direct access right");
}



$job = new userinfo();
$job->get_user_access();
$job->get_user_info();
$job->show();