<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "login_demo";

$link = mysqli_connect($host, $user, $pass, $dbname);

if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
