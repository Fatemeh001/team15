<?php include "header.php";
$title = "Cecile | Feedback";?>



<section class="signup-form">
    
    <!-- Make system ask user for their login and then submit feedback-->

    <!-- if (user is loged in) {they can submit feedback}-->
    <!-- else {ask user to login or sign up}-->
    <h2> Submit your feedback </h2>

    <div class="signup-form" >
        <form action="includes\signup.inc.php" method="post">
            
            <input type="text" name="email" placeholder="Email address" value="Enter your email address"> <br>
            <!-- How satisfied are you with the buying process-->
            <h3>Do you have any suggestions to improve our product and service?</h3>
            <input type="text" size="50" maxlength="1000" name="feedback" placeholder="Feedback" value="Do you have any suggestions to improve our product and service?"> <br>
            <button type="submit" name="submit">Send</button>

        </form>
    </div>
</section>    





<?php include "footer.php" ?>