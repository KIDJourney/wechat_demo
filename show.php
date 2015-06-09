<?php
/**
 * @Author: kidjourney
 * @Date:   2015-06-09 00:47:45
 * @Last Modified by:   kidjourney
 * @Last Modified time: 2015-06-09 11:24:17
 */
session_start();
require_once("lib/http_common.php");
if (!isset($_SESSION['registered']) or $_SESSION['registered'] != 1){
    die("No direct right");
}


require_once('static/show.php');
