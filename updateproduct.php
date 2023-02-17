<?php
$title = "Update your product's info";
include "header.php";
if (isset($_POST['update_product'])) {
  
    $id = $_POST['product?_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $inventory_id = $_POST['inventory_id'];
    $price = $_POST['price'];
    $modified_at = date("Y-m-d H:i:s");
    $quantity = $_POST['quantity'];

    
    $sql = "UPDATE product SET name='$name', description='$description', inventory_id=$inventory_id, price=$price, modified_at='$modified_at', quantity=$quantity WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
}

if (isset($_POST['delete_product'])) {
  a
    $id = $_POST['id'];
    $deleted_at = date("Y-m-d H:i:s");

    
    $sql = "UPDATE product SET deleted_at='$deleted_at' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
}

$sql = "SELECT * FROM product WHERE deleted_at IS NULL";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Product Name: " . $row["name"]. " - Description: " . $row["description"]. " - Inventory ID: " . $row["inventory_id"]. " - Price: " . $row["price"]. " - Quantity: " . $row["quantity"]. " <a href='edit_product.php?id=" . $row["id"] . "'>Edit</a> <a href='delete_product.php?id=" . $row["id"] . "'>Delete</a><br>";
    }
} else {
    echo "No products found.";
}

mysqli_close($conn); 
include "footetr.php";
?>



<form action="" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description"><br><br>
    <input type="text" name="inventory_id" placeholder="Inventory ID">
    <input type="text" name="price" placeholder="Price"><br><br>
    <input type="text" name="quantity" placeholder="
      

     


