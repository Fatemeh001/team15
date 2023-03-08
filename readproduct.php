<?php
$title = "Reading Data from the database";
include "header.php";
include 'db.php';
$sql = "select * from fatemeh_product ";
$result = mysqli_query($conn, $sql);
if($result->num_rows > 0){
   
    echo"<table class='table'>
        <tr><th>ID</th><th>name</th><th>description</th><th>inventory_id</th><th>price</th>
        <th>quantity</th></tr>";
      
        while($row = $result ->fetch_assoc()){
            echo" 
        <tr> 
        <td><a href='updateproduct.php?id=$row[id]'>$row[id]</a></td>
        <td>$row[name]</td>
        <td>$row[description]</td>
        <td>$row[inventory_id]</td>
        <td>$row[price]</td>
        <td>$row[quantity]</td>
        </tr>";

}
echo"</table>" ; 
}
else
    {
        echo "No Result";
    }
    mysqli_close($conn);
include "footer.php";
?>








