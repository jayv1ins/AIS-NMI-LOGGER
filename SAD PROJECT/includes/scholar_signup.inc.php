<?php

if (isset($_POST["submit"])) {

    $Last = $_POST["Last"];
    $First = $_POST["First"];
    $MI = $_POST["MI"];
    $Age = $_POST["Age"];
    $Gender = $_POST["Gender"];
    $Address = $_POST["Address"];
    $Barrangay = $_POST["Barrangay"];
    $City = $_POST["City"];
    $Username = $_POST["Uid"];
    $Email = $_POST["Email"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    
    require_once 'dbs.inc.php';
    require_once 'scholar_function.php';
    
    if (emptyInputSignup($Last, $First, $MI, $Age, $Gender, $Address, $Barrangay, $City, $Username, $Email, $pwd, $pwdRepeat) !== false) {
        header("location: ../scholar_signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($Last) !== false) {
        header("location: ../scholar_signup.php?error=invalidLast");
        exit();
    }
    if (invalidUid($First) !== false) {
        header("location: ../scholar_signup.php?error=invalidFirst");
        exit();
    }
    if (invalidUid($Username) !== false) {
        header("location: ../scholar_signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($Email) !== false) {
        header("location: ../scholar_signup.php?error=invalidemail");
        exit();
    }
    if (pwdmatch($pwd, $pwdRepeat) !== false) {
        header("location: ../scholar_signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $Username, $Email) !== false) {
        header("location: ../scholar_signup.php?error=usernametaken");
        exit();
    }
    
    createScholar($conn, $Last, $First, $MI, $Age, $Gender, $Address, $Barrangay, $City, $Username, $Email, $pwd);
}
else {
    header("location: ../scholar_signup.php");
}