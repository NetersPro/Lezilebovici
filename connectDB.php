<?php

$host = "localhost"; 
$username = "root"; 
$password = ""; 
$db_name = "dblezilebovici"; 


$conn = mysqli_connect($host, $username, $password, $db_name);


if (!$conn) {
    die("Neuspešno povezivanje sa bazom!" . mysqli_connect_error());
} else {
    if (!mysqli_set_charset($conn, "utf8")) {
        die("Error loading character set utf8: " . mysqli_error($conn));
    }
}
?>