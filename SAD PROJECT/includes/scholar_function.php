<?php
/* sign up isko*/
function emptyInputSignup($Last, $First, $MI, $Age, $Gender, $Address, $Barrangay, $City, $Username, $Email,$pwd, $pwdRepeat){
    $result;
    if (empty($Last) || empty($First) || empty($MI) || empty($Age) || empty($Gender) || empty($Address) || empty($Barrangay) || empty($City) || empty($Username) || empty($Email) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($Username) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $Username)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($Email) {
    $result;
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
       
function pwdMatch($pwd, $pwdRepeat) {
    $result;
    if($pwd !== $pwdRepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $Username, $Email) {
    $sql = "SELECT * FROM scholars WHERE Uid = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../scholar_signup.php?error=statement failed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $Username, $Email);
    mysqli_stmt_execute($stmt); 
    
    $resultData = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
}
                   
function createScholar($conn, $Last, $First, $MI, $Age, $Gender, $Address, $Barrangay, $City, $Username, $Email, $pwd) {
    $sql = "INSERT INTO scholars (Last, First, MI, Age, Gender, Address, Barrangay, City, Uid, Email, pwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../scholar_signup.php?error=Create");
        exit();
    }
    
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt, "sssssssssss", $Last, $First, $MI, $Age, $Gender, $Address, $Barrangay, $City, $Username, $Email, $hashedPwd);
    mysqli_stmt_execute($stmt); 
    mysqli_stmt_close($stmt);
    header("location: ../scholar_login.php?error=none");
        exit();
}
/* log in isko*/
function emptyInputLogin($Username, $pwd){
    $result;
    if (empty($Username) || empty($pwd)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
/* check if scholar logged in*/
function loginUser($conn, $Username, $pwd){
    $uidExists = uidExists($conn, $Username, $Username);
    
    if($uidExists === false) {
        header("location: ../scholar_login.php?error=Wrong Username Or Email");
        exit();
    }
    
    $pwdHashed = $uidExists["pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    
    if ($checkPwd === false) {
        header("location: ../scholar_login.php?error=Wrong Password");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["scholar_id"] = $uidExists["scholarsId"];
        $_SESSION["scholar_username"] = $uidExists["Uid"];
        $_SESSION["scholar_last"] = $uidExists["Last"];
        $_SESSION["scholar_first"] = $uidExists["First"];
        $_SESSION["scholar_MI"] = $uidExists["MI"];
        $_SESSION["scholar_age"] = $uidExists["Age"];
        $_SESSION["scholar_gender"] = $uidExists["Gender"];
        $_SESSION["scholar_street"] = $uidExists["Address"];
        $_SESSION["scholar_brgy"] = $uidExists["Barrangay"];
        $_SESSION["scholar_city"] = $uidExists["City"];
        $_SESSION["status"] = $uidExists["status"];
        header("location: ../index.php?");
        exit();
    }
}



 