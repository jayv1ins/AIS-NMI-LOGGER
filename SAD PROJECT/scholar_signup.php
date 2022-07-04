<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOG IN</title>
    <meta name="viewpiont" conetnt="width=device-width, initial-scale">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <img class="logo" src="image/logo.png" alt="logo ">
    <header>
        <nav>
            <div>
                <?php 
                    if (isset($_SESSION["manager_username"])) {
                        echo "<p> Good Day Manager ". $_SESSION["manager_username"] . "</p>";
                    } else if (isset($_SESSION["scholar_username"])) {
                        echo "<p> Good Day Scholar ". $_SESSION["scholar_username"] . "</p>"; 
                    }
                ?>
            </div>
            <ul class="nav_links">
                <li><a href="index.php">HOME</a></li>
                <?php
                /* for manager account */
                    if (isset($_SESSION["manager_id"])) {
                        echo "<li><a href='picker.php'>SPIN</li></a>";
                        echo "<li><a href='tracker.php'>TRACKER </li></a>";
                        echo "<li><a href='profile.php'>PROFILE</li></a>";
                        echo "<li><a href='includes/logout.inc.php'>LOGOUT</li></a>";

                    }else if (isset($_SESSION["scholar_id"])) {
                        echo "<a href='profile.php'>PROFILE </a>";
                        echo "<a href='includes/logout.inc.php'>LOGOUT</a>";
                    }else {
                        echo "<li><a href='aboutus.php'>ABOUT US</a></li>";
                        echo "<li><a href='manager_login.php'>LOG IN</a></li>";
                        echo "<li><a href='manager_signup.php' class='active'>SIGN UP</a></li>";
                    }
                    
                ?>
            </ul>
        </nav>
    </header>
    <img src="image/axie-artwork.jpg" class="background">


    <log_in_form class="signup-form-scholar">
        <h1>Sign Up</h1>
        <p>As <a href="manager_signup.php">Manager</a>/<a href="scholar_signup.php" class="active">Scholar</a></p>
        <form action="includes/scholar_signup.inc.php" method="post">
            <table>
                <tr>
                    <td>
                        <input type="text" name="Last" placeholder="Last Name">
                        <input type="text" name="First" placeholder="First Name">
                        <input type="text" name="MI" placeholder="MI Name">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="number" name="Age" placeholder="Age">
                        <select id="text" name="Gender">
                            <option>Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="text" name="Address" placeholder="Street">
                        <input type="text" name="Barrangay" placeholder="Barrangay">
                        <input type="text" name="City" placeholder="City">
                    </td>
                <tr>
                <tr>
                    <td>
                        <input type="text" name="Uid" placeholder="Username">
                        <input type="text" name="Email" placeholder="Email">

                    </td>
                <tr>
                    <td>
                        <input type="password" name="pwd" placeholder="password">
                        <input type="password" name="pwdrepeat" placeholder="Repeat password">
                    </td>
                </tr>

                <tr>
                    <td>
                        <button type="submit" name="submit">Sign Up</button>
                    </td>
                </tr>
            </table>
        </form>
    </log_in_form>
    <error class="signup_error">
        <?php 
                            if(isset($_GET["error"])) {
                                if ($_GET["error"] === "emptyinput") {
                                    echo"<p> Fill in All fields</p>";
                                } else if ($_GET["error"] === "wronglogin") {
                                     echo"<p>Something wrong please try again!</p>";
                                }
                            }
                        ?>
    </error>
</body>

</html>