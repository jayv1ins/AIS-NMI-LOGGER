<?php
include_once 'includes/dbs.inc.php';
 $sql ="select * from scholars;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/wheel.css">
    <title>Spin Wheel</title>
</head>

<body>
    <button id="spin">Spin</button>
    <span class="arrow"></span>
    <div class="container">
        <?php while ($row = mysqli_fetch_assoc($result)) {?>
        <?php echo $row['Last'];?>, <?php echo $row['First'];?></div>

    </div>
    <?php } ?>
    <script src="JS/wheel.js"></script>
</body>

</html>