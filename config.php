<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "php-api";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>