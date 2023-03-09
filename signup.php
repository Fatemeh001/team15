<?php $title = "Cecile | Newsletter";
include "header.php";
?>



<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="process.php">
		First name:<br>
		<input type="text" name="first_name">
		<br>
		Last name:<br>
		<input type="text" name="last_name">
		<br>
		City name:<br>
		<input type="text" name="city_name">
		<br>
		Email:<br>
		<input type="email" name="email">
		<br><br>
		<input type="submit" name="save" value="Subscribe">
	</form>
  </body>
</html>    





<?php include "footer.php" ?>