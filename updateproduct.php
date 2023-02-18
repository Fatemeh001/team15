<?php
$title = "Update your product's info";
include "header.php";
if (isset($_POST['update_product'])) {
  
    $product_id = $_POST['product_id'];
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
  
    $product_id = $_POST['product_id'];
    $deleted_at = date("Y-m-d H:i:s");

    
    $sql = "UPDATE product SET deleted_at='$deleted_at' WHERE product_id=$product_id";
    if (mysqli_query($conn, $sql)) {
        echo "Product deleted successfully.";
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
}

$sql = "SELECT * FROM product WHERE deleted_at IS NOT NULL";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Product Name: " . $row["name"]. " - Description: " . $row["description"]. " - Inventory ID: " . $row["inventory_id"]. " - Price: " . $row["price"]. " - Quantity: " . $row["quantity"];
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
      




    <?php
$title = "Update your info";
include "header.php";
$a = $_GET['product_id']; 
include 'db.php'; 
$result = mysqli_query($con,"select * from studentinfo 
where product_id = '$a' "); 
$row = mysqli_fetch_array($result); 
?> 
<h2>Update your information below</h2> 
<form name ="update"  method = "post" action = ""> 
<input type="text" name="name" placeholder="Name" required value="<?php echo $row['name']; ?>"><br><br>
    <input type="text" name="description" placeholder="Description" required value="<?php echo $row['description']; ?>"><br><br> 
    <input type="text" name="inventory_id" placeholder="Inventory ID" required value="<?php echo $row['inventory_id']; ?>"><br><br> 
    <input type="text" name="price" placeholder="Price" required value="<?php echo $row['price']; ?>"><br><br> 
    <input type="text" name="quantity" placeholder="quantity" required value="<?php echo $row['quantity']; ?>"><br><br> 
 
</select> 
<br><br> 
 
<input type="submit" value="Update" name ="update"> 
<br><br> 
<input type="submit" value="Delete" name ="delete"> 
 
</form> 
 
<?php 
if (isset($_POST['update'])){ 
    $fname = $_POST['fname']; 
    $lname = $_POST['lname']; 
    $query = mysqli_query($conn,"UPDATE studentinfo set fname='$fname', lname='$lname' where id='$a' "); 
    if ($query){ 
        echo "<h2>Your information is updated successfully</h2> "; 
    } 
    else { echo "<h2>Your information is not updated successfully</h2> ";} 
} 
?>

     


