<?php
    include_once 'index.php';
    
    if($_SERVER['REQUEST_METHOD']=="POST") {
        
    }
?>
<!DOCTYPE html>
    <body>  
        <center>
        <form action='upload.php' method='POST' enctype='multipart/form-data'>
            <input type='file' name='file' placeholder="Change Profile Picture">
            <button type='submit' name='submit'>UPLOAD</button>
        </form>
       </center>
        
    </body>
