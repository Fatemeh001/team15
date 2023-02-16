<form method="post" action="">



<input type="number" name="id" placeholder="Your ID" required>
<input type="text" name="password" placeholder="Your PWD" required>

<input type="submit" value="Submit" name="submit">

</form>

<?php
if (isset($_POST["submit"])) {
    $id = $_POST['id'];
    $password = $_POST['password'];
    include 'db.php';

}





