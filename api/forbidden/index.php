<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 5/8/2017
 * Time: 9:51 PM
 */

$url = "http://localhost".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if(strpos($url, 'noaccess') != FALSE) {
    echo "Oops, it seems you have no access to this page. Please login. <br>";
}