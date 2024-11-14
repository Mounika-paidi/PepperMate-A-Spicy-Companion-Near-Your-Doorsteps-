<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "pm";

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
