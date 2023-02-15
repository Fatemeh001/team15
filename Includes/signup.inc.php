<?php 

if (isset($_POST["submit"])) {
    
    $name = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    

    require_once '../db.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $lname, $email, $pwd, $pwdRepeat) !== false ) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidEmail($email) !== false ) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdRepeat) !== false ) {
        header("location: ../signup.php?error=pwdnotmatch");
        exit();
    }

    createUser($conn, $name, $lname, $email, $pwd);



} else {
    header("location: ../signup.php");
}













?>