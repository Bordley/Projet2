<?php
$host = "localhost";
$username = "phpmyadmin";
$password = "yourpassword";
$dbname = "crud";

//créer la connection
$conn = mysqli_connect($host, $username , $password , $dbname);

//vérifier la connection
if (!$conn) {
    die ( "connection failed: " . mysqli_connect_error());
}
?>