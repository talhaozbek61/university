<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "star-cafe";

$con = mysqli_connect($server, $user, $pass, $db);
if (!$con) {
    echo mysqli_connect_error();
}
mysqli_set_charset($con, "utf8mb4");