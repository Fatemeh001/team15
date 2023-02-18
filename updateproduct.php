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
    $name = $_POST['name'];
    $description = $_POST['description'];
    $inventory_id = $_POST['inventory_id'];
    $price = $_POST['price'];
    $deleted_at = date("Y-m-d H:i:s");
    $quantity = $_POST['quantity'];

    $query = mysqli_query($conn,"UPDATE studentinfo set name='$name', description='$description' , inventory_id='$inventory_id',price='$price',
    deleted_at='$deleted_at' ,quantity='$quantity' where product_id='$a' "); 
    if ($query){ 
        echo "<h2>Your information is updated successfully</h2> "; 
    } 
    else { echo "<h2>Your information is not updated successfully</h2> ";} 
} 
?>

     


