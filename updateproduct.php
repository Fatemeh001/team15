<?php $title = "Cecile | Update Product";
include "header.php";
?>
<?php
include 'db.php';

if (isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $inventory_id = $_POST['inventory_id'];
    $price = $_POST['price'];
    $modified_at = date("Y-m-d H:i:s");
    $quantity = $_POST['quantity'];

    $sql = "UPDATE fatemeh_product SET name='$name', description='$description', inventory_id=$inventory_id, price=$price, modified_at='$modified_at', quantity=$quantity WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<form action="" method="post" style="margin-left:35px ;">
    <input type="number" name="id" placeholder="Product ID">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description"><br><br>
    <input type="number" name="inventory_id" placeholder="Inventory ID">
    <input type="number" name="price" placeholder="Price"><br><br>
    <input type="number" name="quantity" placeholder="Quantity">
    <input type="submit" name="update_product" value="Update Product">
</form>
<?php
include "footer.php";
?>

