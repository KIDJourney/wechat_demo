<?php
/**
 * @Author: kidjourney
 * @Date:   2015-06-08 13:30:38
 * @Last Modified by:   kidjourney
 * @Last Modified time: 2015-06-08 23:09:07
 */
if (isset($_GET['code'])){
    echo $_GET['code'];
} else {
    echo "No code";
}