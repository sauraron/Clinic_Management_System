<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "clinic_management";

$connection = mysqli_connect($host, $user, $pass, $db);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>