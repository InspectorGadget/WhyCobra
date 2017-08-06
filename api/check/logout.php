<?php
/**
 * Created by PhpStorm.
 * User: RTG
 * Date: 5/8/2017
 * Time: 9:57 PM
 */

session_start();
session_destroy();

header("Location: ../");
