<?php include "header.php";
$title = "Cecile | Update Product"?>
<?php
include 'db.php';

if (isset($_POST['update_product'])) {
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $inventory_id = $_POST['inventory_id'];
    $price = $_POST['price'];
    $modified_at = date("Y-m-d H:i:s");
    $quantity = $_POST['quantity'];

    $sql = "UPDATE product SET name='$name', description='$description', inventory_id=$inventory_id, price=$price, modified_at='$modified_at', quantity=$quantity WHERE product_id=$product_id";
    if (mysqli_query($conn, $sql)) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<form action="" method="post" style="margin-left:35px ;">
    <input type="text" name="product_id" placeholder="Product ID">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description"><br><br>
    <input type="text" name="inventory_id" placeholder="Inventory ID">
    <input type="text" name="price" placeholder="Price"><br><br>
    <input type="text" name="quantity" placeholder="Quantity">
    <input type="submit" name="update_product" value="Update Product">
</form>
<?php
include "footer.php";
?>

