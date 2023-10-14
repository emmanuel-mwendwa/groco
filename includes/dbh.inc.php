<?php

$serverName = "localhost: 3306";
$dBUsername = "root";
$dBPassword = "";
$dbName = "store";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dbName);

if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
}

?>