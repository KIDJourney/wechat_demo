<?php
/**
 * @Author: kidjourney
 * @Date:   2015-06-09 00:04:26
 * @Last Modified by:   kidjourney
 * @Last Modified time: 2015-06-09 11:56:38
 */
require_once("lib/db_common.php");
require_once("lib/http_common.php");
session_start();

if (!isset($_SESSION['registered']) or $_SESSION['registered']!= 1){
    redirect('registered.php');
    die("No direct access right");
}

if (!isset($_POST['nickname']) or !isset($_POST['info'])){
    require_once('static/edit.php');
} else {
    $sqliwoker = sqliconnect();
    $query = "UPDATE user set u_nick='%s' , u_info='%s' where u_openid='%s'";
    $query = sprintf($query , $_POST['nickname'] , $_POST['info'] , $_SESSION['u_openid']);
    $sqliwoker->query($query);
    $_SESSION['u_info'] = $_POST['info'];
    $_SESSION['u_nick'] = $_POST['nickname'];
    redirect('show.php');    
}