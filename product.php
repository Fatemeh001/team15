<?php $title = "Cecile | Product";
include "header.php";
?>
<?php
include 'db.php';
if (isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $inventory_id = $_POST['inventory_id'];
    $price = $_POST['price'];
    $created_at = date("Y-m-d H:i:s");
    $modified_at = date("Y-m-d H:i:s");
    $deleted_at = date("Y-m-d H:i:s");
    $quantity = $_POST['quantity'];
    $likes = $_POST['likes'];

    
    $sql = "INSERT INTO fatemeh_product (name, description, inventory_id, price, created_at, modified_at, deleted_at, quantity,likes) VALUES ('$name', '$description', $inventory_id, $price, '$created_at', '$modified_at', '$deleted_at', $quantity,0)";
    if (mysqli_query($conn, $sql)) {
        echo "Product added successfully.";
    } else {
        echo "Error adding product: " . mysqli_error($conn);
    }
}


mysqli_close($conn);

?>


<form method="POST" action="">
  <label>Name:</label>
  <input type="text" name="name" required><br>
  <label>Description:</label>
  <textarea name="description" required></textarea><br>
  <label>Inventory ID:</label>
  <input type="text" name="inventory_id" required><br>
  <label>Price:</label>
  <input type="number" name="price" required><br>
  <label>Quantity:</label>
  <input type="number" name="quantity" required><br>
  <button type="submit">Add Product</button>
</form>

<?php
include "footer.php";
?>