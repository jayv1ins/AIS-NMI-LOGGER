<?php

if (isset($_POST["submit"])) {

    $last_name = $_POST["last_name"];
    $first_name = $_POST["first_name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    
    require_once 'dbs.inc.php';
    require_once 'manager_function.inc.php';
    
    if (emptyInputSignup($last_name, $first_name, $age, $gender, $username, $email, $pwd, $pwdrepeat) !== false) {
        header("location: ../manager_signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../manager_signup.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../manager_signup.php?error=invalidemail");
        exit();
    }
    if (pwdmatch($pwd, $pwdrepeat) !== false) {
        header("location: ../manager_signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../manager_signup.php?error=usernametaken");
        exit();
    }
    
    createManager($conn, $last_name, $first_name, $age, $gender, $username, $email, $pwd);
}
else {
    header("location: ../manager_signup.php");
}