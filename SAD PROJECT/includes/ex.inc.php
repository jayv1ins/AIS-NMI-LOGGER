<?php

if (isset($_POST["submit"])) {

    $slp = $_POST["slp"];
 
    require_once 'dbs.inc.php';
    require_once 'exfunc.inc.php';
   
}
    createdata($conn, $slp);
loginUser($conn, $id);