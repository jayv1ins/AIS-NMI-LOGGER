<?php
//Manager error
function emptyInputSignup($last_name, $first_name, $age, $gender, $username, $email, $pwd, $pwdrepeat){
    $result;
    if (empty($last_name) || empty($first_name) || empty($age) || empty($gender) || empty($username) || empty($email) || empty($pwd) || empty($pwdrepeat)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
       
function pwdMatch($pwd, $pwdrepeat) {
    $result;
    if($pwd !== $pwdrepeat) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
//Manager account exist
function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM managers WHERE username = ? OR email	 = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../manager_signup.php?error=statement failed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
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
//Manager create account
function createManager($conn, $last_name, $first_name, $age, $gender, $username, $email, $pwd) {
    $sql = "INSERT INTO managers (last_name, first_name, age, gender, username, email, pwd) VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../manager_signup.php?error=something error");
        exit();
    }
    
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt, "sssssss", $last_name, $first_name, $age, $gender, $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt); 
    mysqli_stmt_close($stmt);
    header("location: ../manager_login.php?error=none");
        exit();
}
/* check error login*/
function emptyInputLogin($username, $pwd){
    $result;
    if (empty($username) || empty($pwd)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
/* to log in manager*/
function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);
    
    if($uidExists === false) {
        header("location: ../manager_login.php?error=wronglogin");
        exit();
    }
    
    $pwdHashed = $uidExists["pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    
    if ($checkPwd === false) {
        header("location: ../manager_login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["manager_id"] = $uidExists["managerId"];
        $_SESSION["manager_username"] = $uidExists["username"];
        $_SESSION["manager_first"] = $uidExists["first_name"];
        $_SESSION["manager_last_name"] = $uidExists["last_name"];
        $_SESSION["manager_age"] = $uidExists["age"];
        $_SESSION["manager_gender"] = $uidExists["gender"];
        header("location: ../index.php?");
        exit();
    }
}