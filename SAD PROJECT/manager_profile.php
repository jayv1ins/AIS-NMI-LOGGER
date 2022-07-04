<?php
    session_start();
    require_once 'includes/dbs.inc.php';
    require_once 'includes/manager_function.inc.php';
    $sql ="select * from managers ;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile</title>
    <meta name="viewpiont" conetnt="width=device-width, initial-scale">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
                <img class="logo" src="image/logo.png" alt="logo ">

    <header>
         <nav>
                <ul class="nav_links">
                <li><a href="index.php">HOME</a></li>
                <?php
                /* for manager account */
                    if (isset($_SESSION["manager_id"])) {
                        echo "<li><a href='picker.php'>PICKER</li></a>";
                        echo "<li><a href=''>TRACKER </li></a>";
                        echo "<li><a href='manager_profile.php' class='active'>PROFILE</li></a>";
                        echo "<li><a href='includes/logout.inc.php'>LOGOUT</li></a>";

                    }else if (isset($_SESSION["scholar_id"])) {
                        echo "<li><a href='scholar_profile.php'>PROFILE </a></li>";
                        echo "<li><a href='includes/logout.inc.php'>LOGOUT</a></li>";
                    }else {
                        echo "<li><a href=''>ABOUT US</a></li>";
                        echo "<li><a href='manager_login.php'>LOG IN</a></li>";
                        echo "<li><a href='manager_signup.php'>SIGN UP</a></li>";
                    }
                    
                ?>
                </ul>
            </nav>
        </header>
            <img src="image/axie-artwork.jpg" class="background"> 

            <card class="manager_profile" >
                <ul>
                     <?php
                   if (isset($_SESSION["manager_id"])); { ?>
                    <li><p><?php echo "Name: ".$_SESSION['manager_first']."        ".$_SESSION['manager_last_name'];?></p></li><br><br>
                    <li><p><?php echo "Age:    ".$_SESSION['manager_age'];?></p></li><br><br>
                    <li><p><?php echo "Gender: ".$_SESSION['manager_gender'];?></p></li><br><br>
                    <li><p>Scholar Count: 2</p></li>
                    <?php } ?>
                </ul>
            </card>
    </body>
</html> 
