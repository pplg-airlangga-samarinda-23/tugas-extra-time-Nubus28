<?php
session_start();

//connect database
$sname = "localhost";
$uname = "root";
$pwd = "";
$database = "user";
$conn = new mysqli(hostname: $sname, username: $uname, password: $pwd, database: $database);

if(!$conn){
    die("connection failed : ". mysqli_connect_error());
}
?>