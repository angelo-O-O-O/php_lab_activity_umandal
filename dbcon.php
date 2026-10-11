<?php

$hostname ="localhost";
$username ="root";
$pass="";
$dbname='php_db_umandal';

$conn = new mysqli($hostname, $username, $pass, $dbname);

if($conn->connect_error){
    die("Connection failed" . $conn->connect_error);
}
?>