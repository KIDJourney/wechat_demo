<?php
/**
 * @Author: kidjourney
 * @Date:   2015-06-08 22:52:01
 * @Last Modified by:   kidjourney
 * @Last Modified time: 2015-06-09 11:15:12
 */
function redirect($url="./"){
    // print_r($_SESSION);
    // echo "This is "  . $_SERVER['PHP_SELF'] . "<br>";
    // echo "Trying to jump to $url <br>";
    // echo sprintf("<a href='%s'>url</a>" , $url);
    echo "<script language='javascript' type='text/javascript'>";
    echo "window.location.href='$url'";
    echo "</script>";
    die();
}