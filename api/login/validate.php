<?php
session_start();
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 5/8/2017
 * Time: 9:42 PM
 */

$username =  $_POST['username'];
$password = $_POST['password'];

if (empty($username)) {
    header ("Location: ../forbidden");
}

$file = new SQLite3("../../database/sqlite.db");
$sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";
$res = $file->query($sql);

if ($row = $res->fetchArray(1)) {
    $_SESSION['username'] = $username;
    header ("Location: ../check");
} else {
    header ("Location: index.php?wrong");
}