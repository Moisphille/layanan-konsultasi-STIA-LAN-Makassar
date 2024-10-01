<?php
$host = 'localhost';
$db = 'stialan_form';
$user = 'root';
$pass = '';

$conn = new msqli($host, $db, $user, $pass);

if(!$conn){
    die("Connection Failed" . $conn->connect_error);
}

?>