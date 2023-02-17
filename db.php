<?php
$servername="db";
$username="cecile";
$password="password";
$dbname="users";


$conn = new mysqli($servername, $username, $password, $dbname);


if($conn->connect_error){
    die("connection faild:" . $conn->connect_error);
}


?>


