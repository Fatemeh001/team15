<?php $title = "Cecile | Submit Feedback";
include "header.php";
include 'db.php';
$title = "Cecile | Feedback";?>

<style>
    .feedback-form{
    margin: 0 auto;
    margin-left: 500px;
    text-align: left;
    padding-bottom: 20px;
    }
</style>


<section class="submit-feedback">

<?php
$ratingErr = $emailErr = "";
$email = $feedbackText = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = $_POST["email"];
    // check if e-mail address valid (has "@" and ".")
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["feedbackText"])) {
    $feedbackText = "";
  } else {
    $feedbackText = $_POST["feedbackText"];
  }

  if (empty($_POST["rating"])) {
    $ratingErr = "Rating is required";
  } else {
    $rating = $_POST["rating"];
  }
}

?>

    <div class="feedback-form">
    <h2> Submit your feedback </h2>
    <p><span class="error">* required field</span></p>

        <form method="post" action="">
            
        E-mail: <input type="text" name="email" required value="<?php echo $email;?>">
        <span class="error">* <?php echo $emailErr;?></span><br>

            <h3>How satisfied are you with the buying process?</h3>
            <p> 5 = Highly satisfied</p>
            <p> 4 = Satisfied</p>
            <p> 3 = Neutral</p>
            <p> 2 = Dissatisfied</p>
            <p> 1 = Highly dissatisfied</p>

            <input type="radio" name="rating" <?php if (isset($rating) && $rating=="5") echo "checked";?>value="5">5
            <input type="radio" name="rating" <?php if (isset($rating) && $rating=="4") echo "checked";?> value="4">4
            <input type="radio" name="rating" <?php if (isset($rating) && $rating=="3") echo "checked";?> value="3">3
            <input type="radio" name="rating" <?php if (isset($rating) && $rating=="2") echo "checked";?> value="2">2  
            <input type="radio" name="rating" <?php if (isset($rating) && $rating=="1") echo "checked";?> value="1">1  
            <span class="error">* <?php echo $ratingErr;?></span><br>


            <h3>Do you have any suggestions to improve our products and service?</h3>

            <textarea maxlength="1000" name="feedbackText" placeholder="Feedback" 
            rows="4" cols="50" value="Do you have any suggestions to improve our product and service?">
            </textarea><br>
            
            <input type="submit" value="Send" name="submit"><br><br>

            <?php
            if (isset($_POST['submit'])) {
              $email = $_POST['email'];
              $rating = $_POST['rating'];
              $feedbackText = $_POST['feedbackText'];
          
              include 'db.php';
              $sql="insert into marika_feedback (email, rating, feedbackText)
              values('$email', '$rating', '$feedbackText')";
          
              if($conn -> query($sql) === TRUE) {
                  echo "Thank you for your feedback!";}
              else {
                echo "Error: " . $sql . "<br>" . $conn -> $error;}
          
              $conn -> close();
          }
            ?>

        </form>

        <script>
          window.onbeforeunload = function(){
            if (email !=='' || rating !==''|| feedbackText !==''){
            return 'You have unsaved changes on this page. Do you want to leave this page?';
          };
          }
        </script>


    </div>
</section>    

<?php include "footer.php" ?>