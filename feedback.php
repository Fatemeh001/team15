<?php include "header.php";
$title = "Cecile | Feedback";?>

<style>
    .feedback-form{
    margin: 0 auto;
    text-align: center;
    padding-bottom: 20px;
    }
    </style>


<section class="submit-feedback">

<?php
$ratingErr = $emailErr = "";
$email = $comment = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = $_POST["comment"];
  }

  if (empty($_POST["rating"])) {
    $ratingErr = "Rating is required";
  } else {
    $rating = $_POST["rating"];
  }
}

?>
    
    <!-- Make system ask user for their login and then submit feedback-->

    <!-- if (user is loged in) {they can submit feedback}-->
    <!-- else {ask user to login or sign up}-->

    <div class="feedback-form">
    <h2> Submit your feedback </h2>
    <p><span class="error">* required field</span></p>


        <form action="feedbackThanks.php" method="post">
            
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span><br>

            <h3>How satisfied are you with the buying process?</h3>
            <!-- Make a table -->
            <p> 5 = Highly satisfied</p>
            <p> 4 = Satisfied</p>
            <p> 3 = Neutral</p>
            <p> 2 = Dissatisfied</p>
            <p> 1 = Highly dissatisfied</p>

            <input type="radio" name="rating" <?php if (isset($gender) && $gender=="female") echo "checked";?>value="female">5
            <input type="radio" name="rating" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">4
            <input type="radio" name="rating" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">3
            <input type="radio" name="rating" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">2  
            <input type="radio" name="rating" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">1  
            <span class="error">* <?php echo $ratingErr;?></span><br>


            <h3>Do you have any suggestions to improve our products and service?</h3>

            <textarea maxlength="500" name="feedback" placeholder="Feedback" 
            rows="4" cols="50" value="Do you have any suggestions to improve our product and service?">
            </textarea><br>
            
            <button type="submit" name="submit">Send</button>

        </form>
    </div>
</section>    

<?php include "footer.php" ?>