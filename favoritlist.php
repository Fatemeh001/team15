<?php include "header.php";
$title = "Cecile | favorit List Product"?>
<?php
include 'db.php';

if (isset($_POST['add_favorit'])) {
    $product_id = $_POST['product_id'];
    $user_id = $_SESSION['user_id'];
    $price = $_POST['price'];
    $in_the_flist = 1;


     $sql = "INSERT INTO favorite_list (product_id,user_id,  price,  in_the_flist) 
     VALUES ($product_id,$user_id,  $price, $in_the_flist)";
     

}