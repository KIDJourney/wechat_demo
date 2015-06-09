<?php
/**
 * @Author: kidjourney
 * @Date:   2015-06-09 10:31:36
 * @Last Modified by:   kidjourney
 * @Last Modified time: 2015-06-09 11:00:38
 */
session_start();
unset($_SESSION);
$test = array("array"=>array(1,2,3,4) , "array1" =>1);
print_r($test);