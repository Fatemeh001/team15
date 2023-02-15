<?php


function emptyInputSignup($name, $lname, $email, $pwd, $pwdRepeat) {

    $result;

    if (empty($name) || empty($lname) || empty($email) || empty($pwd) || empty($pwdRepeat))   {
        $result = true;


    }
    else {
        $result = false;
    }

    return $result;

}



function invalidEmail($email) {

    $result;

    if (preg_match("/^ []")) = true;


    }
    else {
        $result = false;
    }

    return $result;

}


