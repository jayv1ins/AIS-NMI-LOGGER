<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                        echo "<li><a href='manager_profile.php'>PROFILE</li></a>";
                        echo "<li><a href='includes/logout.inc.php'>LOGOUT</li></a>";

                    }else if (isset($_SESSION["scholar_id"])) {
                        echo "<a href='scholar_profile.php'>PROFILE </a>";
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

    <signup class="signup-form">
        <h1>Sign Up</h1>
        <p>As <a href="manager_signup.php" class="active">Manager</a>/<a href="scholar_signup.php">Scholar</a></p>
        <form action="includes/manager_signup.inc.php" method="post">
            <table>
                <tr>
                    <td>
                        <input type="text" name="last_name" placeholder="Last_name">
                        <input type="text" name="first_name" placeholder="First_name">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="number" name="age" placeholder="Age">
                        <select id="text" name="gender">
                            <option>Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="username" placeholder="Username">
                        <input type="text" name="email" placeholder="Email">

                    </td>
                <tr>
                    <td>
                        <input type="password" name="pwd" placeholder="password">
                        <input type="password" name="pwdrepeat" placeholder="Repeat password">
                    </td>
                </tr>

                <tr>
                    <td>
                        <center><button type="submit" name="submit">Sign Up</button></center>
                    </td>
                </tr>
            </table>
        </form>
    </signup>
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