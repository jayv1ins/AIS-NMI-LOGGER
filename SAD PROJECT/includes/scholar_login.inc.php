<?php
if (isset($_POST["submit"])) {

    $Username = $_POST["Uid"];
    $pwd = $_POST["pwd"];
    
    require_once 'dbs.inc.php';
    require_once 'scholar_function.php';
    
    if (emptyInputLogin($Username, $pwd) !== false) {
        header("location: ../scholar_login.php?error=emptyinput");
        exit();
    }
    
    loginUser($conn, $Username, $pwd);
}else {
        header("location: ../scholar_login.php?error=emptyinput");
        exit();
    }