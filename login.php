<?php include "header.php";
$title = "Cecile | Login";
?>



<section class="signup-form">
    <h2> Log in</h2>

    <div class="signup-form" >
        <form action="includes\login.inc.php" method="post">

    

            <input type="text" name="fname" placeholder="Email"> <br>
          
            <input type="password" name="pwd" placeholder="Password"> <br>
            
            <button type="submit" name="submit">Login</button>

            <a href="adminlogin.php">Admin</a>



        </form>
    </div>
</section>    




<?php include "footer.php" ?>