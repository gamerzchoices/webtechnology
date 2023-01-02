<?php

$server = "localhost";
$username = "webtechnology";
$password = "N6ea6dBb2TrZTyKt";
$database = "webtechnology";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("Connection failed". mysqli_connect_error());
}else{
    //echo "Connection Ok";
}

session_start();

?>
