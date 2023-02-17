
<?php
include "header.php";
?>
<?php
include 'db.php';
if (isset($_POST['add_product'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $inventory_id = $_POST['inventory_id'];
    $price = $_POST['price'];
    $created_at = date("Y-m-d H:i:s");
    $modified_at = date("Y-m-d H:i:s");
    $deleted_at = date("Y-m-d H:i:s");
    $quantity = $_POST['quantity'];

    
    $sql = "INSERT INTO product (name, description, inventory_id, price, created_at, modified_at, deleted_at, quantity) VALUES ('$name', '$description', $inventory_id, $price, '$created_at', '$modified_at', '$deleted_at', $quantity)";
    if (mysqli_query($conn, $sql)) {
        echo "Product added successfully.";
    } else {
        echo "Error adding product: " . mysqli_error($conn);
    }
}


mysqli_close($conn);

?>


<form action="" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description"><br><br>
    <input type="text" name="inventory_id" placeholder="Inventory ID">
    <input type="text" name="price" placeholder="Price"><br><br>
    <input type="text" name="quantity" placeholder="Quantity">
    <input type="submit" name="add_product" value="Add Product">
</form>

<?php
include "footer.php";
?>