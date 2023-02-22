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
     if (mysqli_query($conn, $sql)) {
        echo "Product added to favorites successfully.";
    } else {
        echo "Error adding product to favorites: " . mysqli_error($conn);
    }


}


mysqli_close($conn);
?>
<form action="" method="post">
    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description"><br><br>
</form>




<?php include "footer.php";
?>
