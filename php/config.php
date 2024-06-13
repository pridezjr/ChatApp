<?php
$hostname = "localhost";
$username = "root";
$passwword = "";
$dbname = "chatapp";

$conn = mysqli_connect($hostname, $username, $passwword, $dbname);
if (!$conn) {
    echo"Database connection error" .mysqli_connect_error();
}
?>