<?php
/**
 * Created by PhpStorm.
 * User: kidjourney
 * Date: 6/8/15
 * Time: 9:38 PM
 */
require_once('lib/http_common.php');
require_once('lib/db_common.php');

session_start();

if ($_SESSION['registered'] == 1){
    redirect('show.php');
    die();
}// in the database 


if (!isset($_SESSION['u_openid'])){
    die("No direct access , No openid");
}

if (isset($_POST['action'])){
    echo "Get post";
    print_r($_POST['action']);
    print(strlen($_POST['action']));
    if ($_POST['action'] == "register"){
        $mysqliwoker = sqliconnect();
        $query ="INSERT INTO user (u_openid , u_nick) VALUES ('%s','%s');";
        $query = sprintf($query,$_SESSION['u_openid'] , $_SESSION['u_nick']);
        $mysqliwoker->query($query);
        $_SESSION['registered'] = 1;
        redirect('show.php');
    }
} else {
    require_once('static/register.php');
}