<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "border";
$conn = mysqli_connect($server, $username, $password, $dbname);
if (!$conn)
    {
        die("Connection error:" . mysqli_connect_error());
    }
?>
