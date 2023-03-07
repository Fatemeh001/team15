<?php include "header.php";

$title = "Cecile | Home";?>
<?php
include 'db.php';?>
<?php
if (isset($_POST['liked'])) {
  $product_id = $_POST['product_id'];
  $result = mysqli_query($conn,"SELECT * FROM product WHERE id=$product_id");
  $row= mysqli_fetch_array($result);
  $n=$row['likes'];
  $sql1 = "UPDATE product SET likes=$n+1 WHERE id=$product_id";
  mysqli_query($conn,$sql1);
  $sql2 = "INSERT INTO likes(user_id,product_id) VALUES(1,$product_id)";
  mysqli_query($conn,$sql2);
  exit();
} 
if (isset($_POST['unliked'])) {
  $product_id = $_POST['product_id'];
  $result = mysqli_query($conn,"SELECT * FROM product WHERE id=$product_id");
  $row= mysqli_fetch_array($result);
  $n=$row['likes'];
  $sql3 = "DELETE FROM likes WHERE product_id=$product_id AND user_id=1";
  mysqli_query($conn,$sql3);
  $sql1 = "UPDATE product SET likes=$n-1 WHERE id=$product_id";
  mysqli_query($conn,$sql1);
  exit();
}
?>
<link rel="stylesheet" href="styles.css">
<div class="container">