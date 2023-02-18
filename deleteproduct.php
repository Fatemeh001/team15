<?php
include "header.php";
?>

<?php
include 'db.php';

if (isset($_POST['delete_product'])) {

    $product_id = $_POST['product_id'];

    $sql = "DELETE FROM product WHERE product_id=$product_id";
    if (mysqli_query($conn, $sql)) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<form action="" method="post" style="margin-left:35px ;">
    <input type="text" name="product_id" placeholder="Product ID">
    <input type="submit" name="delete_product" value="Delete Product">
</form>


<?php
include "footer.php";
?>