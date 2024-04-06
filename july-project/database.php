<?php

$host = "localhost";
$username = "php_new_user";
$password = "9Rqew)dfVRMPPY.e";
$dbname = "login_db";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die ("Connection error:" . $mysqli->connect_error);
}

return $mysqli;
?>