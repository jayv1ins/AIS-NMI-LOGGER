<?php
    session_start();
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tracker</title>
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
                        echo "<li><a href='tracker.php' class='active'>TRACKER </li></a>";
                        echo "<li><a href='manager_profile.php' >PROFILE</li></a>";
                        echo "<li><a href='includes/logout.inc.php'>LOGOUT</li></a>";

                    }else if (isset($_SESSION["scholar_id"])) {
                        echo "<li><a href='scholar_profile.php'>PROFILE</a></li>";
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

           <tracker class="manager_tracker">
        <table>
        <?php
                echo "<tr>";
                echo "<td>
                        <p>Scholar Name </p>
                    </td>
                <td>
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
                        <p> Alvin </p>    
                    </td>
                    <td>
                        <p></p>
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
             echo "<tr>";
                echo"    <td>
                        <p> Diluc </p>    
                    </td>
                    <td>
                        <p>269</p>
                    </td>
                    <td>
                        <p>9827</p>
                    </td>
                    <td>
                        <p>20%<br>1965.4</p>
                    </td>
                    <td>
                        <p>80%<br>7861.6</p>
                    </td>
                    <td>
                        <p>₱9823.8</p>
                    </td>
                    <td>
                        <p>₱31,446.4</p>
                    </td>
                </tr>";
                
        ?>
        </table>
    </tracker>
    <div class="tracker">
            <select class="Category1">
                <option disabled selected>Category 1</option>
                <option value="Sex">HIGHEST SLP</option>
                <option value="Sex">HIGHEST TOTAL SLP</option>
            </select>
            <br>
            <br>
            <select class="Category2">
                <option disabled selected>Category2</option>
                <option value="Sex">HIGHEST SLP</option>
                <option value="Sex">HIGHEST TOTAL SLP</option>
            </select>
            <br>
            <br>
    
                <center><form action="spin.php" class="spin">
                </form></center>
            </div>
    </body>
</html> 
