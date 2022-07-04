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
    <title>HOME</title>
    <meta name="viewpiont" conetnt="width=device-width, initial-scale">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <img class="logo" src="image/logo.png" alt="logo ">
    <header>
        <nav>

            <ul class="nav_links">
                <li><a href="index.php" class="active">HOME</a></li>
                <?php
                /* for manager account */
                    if (isset($_SESSION["manager_id"])) {
                        echo "<li><a href='picker.php'>PICKER</li></a>";
                        echo "<li><a href='tracker.php'>TRACKER </li></a>";
                        echo "<li><a href='manager_profile.php'>PROFILE</li></a>";
                        echo "<li><a href='includes/logout.inc.php'>LOGOUT</li></a>";

                    }else if (isset($_SESSION["scholar_id"])) {
                        echo "<li><a href='scholar_profile.php'>PROFILE </a></li>";
                        echo "<li><a href='includes/logout.inc.php'>LOGOUT</a></li>";
                    }else {
                        echo "<li><a href='aboutus.php'>ABOUT US</a></li>";
                        echo "<li><a href='manager_login.php'>LOG IN</a></li>";
                        echo "<li><a href='manager_signup.php'>SIGN UP</a></li>";
                    }
                    
                ?>
            </ul>
        </nav>
    </header>
    <img src="image/axie-artwork.jpg" class="background">

    <intro>
        <p class="welcome">WELCOME TO AIS WEBSITE</p>
        <?php 
                    if (isset($_SESSION["manager_username"])) {
                        echo "<p class='welcome_user'> Good Day Manager ". $_SESSION["manager_username"] . "</p>";
                    } else if (isset($_SESSION["scholar_username"])) {
                        echo "<p class='welcome_user'> Good Day Scholar ". $_SESSION["scholar_username"] . "</p>"; 
                    }
                ?>
    </intro>

    <guide>
        <p class="guide">The Function</p>
        <div class="container1">
            <h2>The sign up form</h2>
            <br>
            <img src="image/signupm.JPG">
            <br>
            <img src="image/signups.JPG">
            <div class="image__overlay">
                <div class="image__title"></div>
                <p class="image__description">As can you See we have two signup form one is for Manager and Scholar, The
                    scholar signup form has more requirements than manager </p>
            </div>
        </div>

        <div class="container2">
            <h2>The Manager function</h2>
            <br>
            <img src="image/picker.JPG">
            <br>
            <img src="image/tracker.JPG">
            <div class="image__overlay2">
                <div class="image__title2"></div>
                <p class="image__description2">If you are a Manager the function you have is Picker and Tracker.<br>
                    The Picker is you can pick your scholar that has automatic data of scholars when they sign up, You
                    can manually pick scholar or let the reoulete decide for you. Tracker is where you can see the SLP
                    of your scholars
                </p>
            </div>
        </div>

        <div class="container3">
            <h2>The Scholar function</h2>
            <img src="image/scholar.JPG">
            <div class="image__overlay3 ">
                <div class="image__title"></div>
                <p class="image__description">
                    If you are a Scholar the function you only have is Profile which has slp submiter if you are
                    scholar.
                </p><br><br>
                <p>If not it gonna show this</p>
                <img src="image/notscholar.JPG">
            </div>
        </div>
    </guide>
</body>

</html>