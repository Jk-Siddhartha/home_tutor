<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "home_tutor";


$conn = new mysqli($server,$username,$password,$db);


if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
}

echo "<script>console.log('db connected')</script>";