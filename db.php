<?php
$servername="db-1";
$username="cecile";
$password="password";
$dbname="cecile";


$conn = new mysqli($servername, $username, $password, $dbname);


if($conn->connect_error){
    die("connection faild:" . $conn->connect_error);
}


?>


