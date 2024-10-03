<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stialan_form";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed" . $conn->connect_error);
}

?>