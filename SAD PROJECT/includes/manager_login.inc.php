<?php
if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    
    require_once 'dbs.inc.php';
    require_once 'manager_function.inc.php';
    
    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../manager_login.php?error=emptyinput");
        exit();
    }
    
    loginUser($conn, $username, $pwd);
    }
    else {
        header("location: ../manager_login.php?error=emptyinput");
        exit();
    }