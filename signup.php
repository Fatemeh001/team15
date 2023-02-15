<?php include "header.php" ?>



<section class="signup-form">
    <h2> Sign up here to be the first one to know about our exclusive deals! </h2>

    <div class="signup-form" >
        <form action="includes\signup.inc.php" method="post">
            

    

            <input type="text" name="fname" placeholder="First name"> <br>
            <input type="text" name="lname" placeholder="Last name"> <br>
            <input type="text" name="email" placeholder="Email address"> <br>
            <input type="password" name="pwd" placeholder="Password"> <br>
            <input type="password" name="pwdrepeat" placeholder="Repeat password"> <br>
            <button type="submit" name="submit">Sign up</button>


        </form>
    </div>
</section>    



















<?php include "footer.php" ?>