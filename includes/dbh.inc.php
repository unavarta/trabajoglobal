<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "pageusers";

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("Connection failed. Error: " . mysqli_connect_error());
}

?>