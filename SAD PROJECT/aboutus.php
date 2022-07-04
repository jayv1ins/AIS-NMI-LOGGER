<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project Cite</title>
    <meta name="description">
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
                        echo "<li><a href='tracker.php'>TRACKER </li></a>";
                        echo "<li><a href='manager_profile.php'>Profile</li></a>";
                        echo "<li><a href='includes/logout.inc.php'>logout</li></a>";

                    }else if (isset($_SESSION["scholar_id"])) {
                        echo "<li><a href='scholar_profile.php'>Profile </a></li>";
                        echo "<li><a href='includes/logout.inc.php'>logout</a></li>";
                    }else {
                        echo "<li><a href='aboutus.php' class='active'>ABOUT US</a></li>";
                        echo "<li><a href='manager_login.php'>LOG IN</a></li>";
                        echo "<li><a href='manager_signup.php'>SIGN UP</a></li>";
                    }
                    
                ?>
                </ul>
            </nav>
        </header>
             <img src="image/axie-artwork.jpg" class="background"> 
        <main>

            <div class="Wrapper">
                <h1>About Us</h1>

                <div class="Team">
                    <div class="Team_members">

                        <div class="team_img">
                            <img src="image/alyanna.jpg" alt="Team_members_image">
                        </div>

                        <h3>Alyanna Ubaldo</h3>
                        <p class="role">Researcher</p>
                        <p>
                            Working in a group is crucial, it needed to have teamwork and cooperation,
                            but since this project has started, we give our best, share our ideas,
                            did our parts to make this project successful. The group gained a lot of experiences
                            and knowing by this project, which is essential for the future.
                            The team members did put a lot of effort to make this successful,
                            and for this website application to be helpful in the future users.
                        </p>
                    </div>

                    <div class="Team_members">

                        <div class="team_img">
                            <img src="image/alfonso.jpg" alt="Team_members_image">
                        </div>

                        <h3>Stephene Alfonso</h3>
                        <p class="role">Researcher</p>
                        <p>
                            Our website is about how we help the Axie Infinity Community finding scholars and managers.
                            At present, many people do not have jobs and they can't go out to find a job,
                            I hope our website is a good help for them. I say this is very helpful to the
                            people who don't have a job because it makes their life easy also to the managers
                            it is easy for them to find scholars and help them to have an Axie.
                        </p>
                    </div>

                    <div class="Team_members">
                        
                         <div class="team_img">
                            <img src="image/alvin.png" alt="Team_members_image">
                        </div>
                        
                        <h3>Alvin Nakpil</h3>
                        <p class="role">Researcher</p>
                        <p>
                            I propose this project because I inspired streamers because they stream to find scholars
                            and of course they helping others to be known or expose to other managers. who also watching
                            he/her stream, I enjoyed doing this project but some of it is really stressful because
                            I don’t know a thing about PHP. but I still proposed this project, that’s why I got
                            no choice but to self-study for 9 days to finish our website. And this is my first time
                            doing a group website so I’m proud to say that we did our best to finish this project
                            even though we don’t have enough time to finish it.
                        </p>
                    </div>

                    <div class="Team_members">

                        <div class="team_img">
                            <img src="image/cubol.jpg" alt="Team_members_image">
                        </div>

                        <h3>Marlon Cubol</h3>
                        <p class="role">Researcher</p>
                        <p>
                            Doing research like this is enjoyable because you can go back to the old knowledge that
                            you have forgotten and you will also get new knowledge because of the help of your colleagues.
                            The only bad thing about this is the short time given for doing this project.
                            I think we could do a better and more fun project if we had more time.
                        </p>
                    </div>

                    <div class="Team_members">

                        <div class="team_img">
                            <img src="image/zapata.jpg" alt="Team_members_image">
                        </div>

                        <h3>Julius Zapata</h3>
                        <p class="role">Researcher</p>
                        <p>
                            This research and website is designed to help the users manager, nft investors, scholar to navigate,
                            track, and to monitor their income specially this is a nft games through developing a research question
                            and thesis doing the research, writing the paper, and correctly documenting your sources.
                            This guide is designed to help you navigate the research, through developing a research question
                            and thesis, doing the research, writing the paper, and correctly documenting your sources.
                        </p>
                    </div>

                </div>
            </div>
            </main>
        </body>

    </html> 