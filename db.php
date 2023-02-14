<?php
$servename="db";
$username="team15";
$password="password";
$dbname="team15";


$conn = new mysqli($servename,$username,$password, $dbname);
if($conn->connect_error){
    die("connection faild:" . $conn->connect_error);
}


?>