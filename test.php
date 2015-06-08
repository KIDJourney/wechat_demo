<?php
/**
 * @Author: kidjourney
 * @Date:   2015-06-08 14:54:24
 * @Last Modified by:   kidjourney
 * @Last Modified time: 2015-06-08 15:37:31
 */
require_once('lib/wechat_common.php');

// $response = get_access_key();
// print_r($response);

$time = return_access_key();
print_r($time);
$time = $time['time'];
$time = strtotime($time);

print_r(time() - $time);