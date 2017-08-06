<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 6/8/2017
 * Time: 5:22 PM
 */

$ip = $_POST['ip'];

$file = new SQLite3("../../../../database/sqlite.db");
$sql = "SELECT * FROM database WHERE ip = '$ip'";
$res = $file->query($sql);

if ($row = $res->fetchArray(1)) {

    header("Location: index.php");

}