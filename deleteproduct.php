<?php
include 'db.php';

include "header.php";


if (isset($_POST['delete_product'])) {
    $product_id = $_POST['product_id'];

    $sql = "DELETE FROM product WHERE product_id=$product_id";
    if (mysqli_query($conn, $sql)) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
}



