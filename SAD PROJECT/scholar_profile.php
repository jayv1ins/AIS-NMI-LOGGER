<?php
    session_start();
    require_once 'includes/dbs.inc.php';
    require_once 'includes/scholar_function.php';
    $sql ="select * from scholars ;";
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
                        echo "<li><a href='picker.php'>SPIN</li></a>";
                        echo "<li><a href=''>TRACKER </li></a>";
                        echo "<li><a href='manager_profile.php'>PROFILE</li></a>";
                        echo "<li><a href='includes/logout.inc.php'>LOGOUT</li></a>";

                    }else if (isset($_SESSION["scholar_id"])) {
                        echo "<li><a href='scholar_profile.php' class='active'>PROFILE </a></li>";
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

    <card class="scholar_profile">
        <ul>
            <?php
                   if (isset($_SESSION["manager_id"])); { ?>
            <li>
                <p><?php echo "Name: ".$_SESSION['scholar_last']."        ".$_SESSION['scholar_first'];?></p>
            </li><br><br>
            <li>
                <p><?php echo "Age:    ".$_SESSION['scholar_age'];?></p>
            </li><br><br>
            <li>
                <p><?php echo "Gender: ".$_SESSION['scholar_gender'];?></p>
            </li><br><br>
            <li>
                <p><?php echo "Address: ".$_SESSION['scholar_street']." ".$_SESSION['scholar_brgy']." ".$_SESSION['scholar_city'];?>
                </p>
            </li><br><br>
            <?php } ?>
        </ul>
    </card>
    <logs class="logs">
        <table>
            <?php
            $status = $_SESSION['status'];
            if ( $status == 1) {
                echo "<tr>";
                echo "<td>
                        <p>Today slp </p>
                    </td>
                    <td>
                        <p>TOTAL SLP</p>
                    </td>
                    <td>
                        <p>Manager SLP</p>
                    </td>
                    <td>
                        <p>Scholar SLP</p>
                    </td>
                    <td>
                        <p>Manager Pesos</p>
                    </td>
                    <td>
                        <p>Scholar Pesos</p>
                    </td>";
                echo "</tr>";
                echo "<tr>";
                echo"    <td>
                        <input type='text' name='num1'>    
                    </td>
                    <td>
                        <p>3982</p>
                    </td>
                    <td>
                        <p>60%<br>2389.2</p>
                    </td>
                    <td>
                        <p>40%<br>1592.8</p>
                    </td>
                    <td>
                        <p>₱7831.2</p>
                    </td>
                    <td>
                        <p>₱6371.2</p>
                    </td>
                </tr>";
                
        ?>
        </table>
        <?php 
        echo "  <button name='submit' value='submit' type='submit'>add</button>";
        }else {
                        echo "<p>You are not still Scholar dont worry you manager will come </p>";
            
            }?>
    </logs>
</body>

</html>