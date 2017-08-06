<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 5/8/2017
 * Time: 7:45 PM
 * @param string $var
 * @return string
 */

$var = $_GET['ip'];

if (onCheck($var) === "NOT ACTIVE") {
    $json = new Stdclass();
    $json->servers = onCheck($var);
    echo json_encode($json);
} else {
    $json = new Stdclass();
    $json->servers = onCheck($var);
    echo json_encode($json);
}

/**
 * @param string $var
 * @return string
 */
function onCheck(string $var): array {

        $file = new SQLite3("../../database/sqlite.db");
        $sql = "SELECT * FROM database WHERE ip = '$var'";
        $res = $file->query($sql);

            if (!$row = $res->fetchArray(1)) {
                return "NOT ACTIVE";
            } else {
                $array = [$row];
                return $array;
            }

    }
