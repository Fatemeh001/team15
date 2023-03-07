<?php
ob_start(); 
?>
<?php
include_once 'db.php';

if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
	 $email = $_POST['email'];

     include 'db.php';
     
     
	 $sql = "INSERT INTO konsta_subscribers (first_name,last_name,city_name,email)
	 VALUES ('$first_name','$last_name','$city_name','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "Thank you for subscribing to our newsletter!";
        

        header("Location:subscription.php"); 
        ob_end_flush();

        
        
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


?>