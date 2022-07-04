<?php 
/* Singup manager*/
function emptyInputSingup($slp){
    $result;
    if (empty($slp)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


                   
function createdata($conn, $slp) {
     $sql = "INSERT INTO slps (slp) values (?)";
        $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../ex.php?error=statementfailed");
        exit();
    }
    
     mysqli_stmt_bind_param($stmt, "s", $slp);
        mysqli_stmt_execute($stmt); 
        mysqli_stmt_close($stmt);
    header("location: ../ex.php?error=none");
        exit();
}

function uidExists($conn, $id) {
    $sql = "SELECT * FROM exs WHERE id = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../scholarsignup.php?error=statement failed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $id);
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

function loginUser($conn, $id){
    $uidExists = uidExists($conn, $id);
    
    if($uidExists === false) {
        header("location: ../ex.php?error=wronglogin");
        exit();
    }
}