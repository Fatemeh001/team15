<?php include "header.php" ?>



<section class="signup-form">
    <h2> Sign up here to be the first one to know about our exclusive deals! </h2>

    <div class="signup-form" >
        <form action="includes\login.inc.php" method="post">

    

            <input type="text" name="fname" placeholder="Email" required style="margin-bottom: 5px;"> <br>
          
            <input type="password" name="pwd" placeholder="Password" required style="margin-bottom: 5px;"> <br>
            
            <button type="submit" name="submit" style="background-color: #f8d4c6; border-color: #f8d4c6;">Login</button>

            <a href="adminlogin.php" style="margin-left: 10px;">Admin</a>



        </form>
    </div>
</section>    



















<?php include "footer.php" ?>