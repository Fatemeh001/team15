<?php include "header.php" ?>



<section class="signup-form">
    <h2> Sign up here to be the first one to know about our exclusive deals! </h2>

    <div class="signup-form" >
        <form action="includes\signup.inc.php" method="post">
            

    

            <input type="text" name="fname" placeholder="First name" required style="margin-bottom: 5px;"> <br>
            <input type="text" name="lname" placeholder="Last name" required style="margin-bottom: 5px;"> <br>
            <input type="text" name="email" placeholder="Email address" required style="margin-bottom: 5px;"> <br>
            <input type="password" name="pwd" placeholder="Password" required style="margin-bottom: 5px;"> <br>
            <input type="password" name="pwdrepeat" placeholder="Repeat password" required style="margin-bottom: 5px;"> <br>
            <button type="submit" name="submit" style="background-color: #f8d4c6; border-color: #f8d4c6;">Sign up</button>
            <a class="login" href="login.php" style="margin-left: 10px; ">Sign In</a>


        </form>
    </div>
</section>    



















<?php include "footer.php" ?>