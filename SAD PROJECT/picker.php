<?php
session_start();
include_once 'includes/dbs.inc.php';
 $sql ="select * from scholars;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
?>

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
                        echo "<li><a href='picker.php' class='active'>PICKER</li></a>";
                        echo "<li><a href='tracker.php'>TRACKER </li></a>";
                        echo "<li><a href='manager_profile.php' >PROFILE</li></a>";
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
    <div class="Database">
        <table align="center" border="1px" style="width:900px; line-height:">
            <tr>
                <th colspan="10">
                    <H1>Inspiring to be Scholar</H1>
                </th>
            </tr>

            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>MI</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Street</th>
                <th>Barrangay</th>
                <th>City</th>
                <th>Email</th>
            </tr>
            <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
            <tr>
                <td><?php echo $row['Last'];?></td>
                <td><?php echo $row['First'];?></td>
                <td><?php echo $row['MI'];?></td>
                <td><?php echo $row['Age'];?></td>
                <td><?php echo $row['Gender'];?></td>
                <td><?php echo $row['Address'];?></td>
                <td><?php echo $row['Barrangay'];?></td>
                <td><?php echo $row['City'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo "<input type='checkbox'>"?></td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <div class="Picker">
        <select class="Category1">
            <option disabled selected>Category 1</option>
            <option value="Sex">Male</option>
            <option value="Sex">Female</option>
            <option value="Age">Age</option>
            <option value="Random">Random</option>
        </select>
        <br>
        <br>
        <select class="Category2">
            <option disabled selected>Category2</option>
            <option value="Sex">Male</option>
            <option value="Sex">Female</option>
            <option value="Age">Age</option>
            <option value="Random">Random</option>
        </select>
        <br>
        <br>
        <select class="Category3">
            <option disabled selected>Category3</option>
            <option value="Sex">Male</option>
            <option value="Sex">Female</option>
            <option value="Age">Age</option>
            <option value="Random">Random</option>

        </select>
        <center>
            <form action="spin.php" class="spin">
                <input type="submit" value="Spin now" />
            </form>
        </center>
    </div>

</body>

</html>