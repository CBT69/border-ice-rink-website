<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>Curling Clubs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Border Ice Rink. Scottish Curling and Ice Skating Club">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="js/jquery.lightbox-0.5.min.js"></script>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="" type="text/javascript"></script>
    </head>
    <!-- Visible content -->

    <body class="container-fluid">
        <!-- Navbar holder-->
        <header class="shadow">
            <?php include 'inc/nav.php'; ?>
        </header>
        <!-- Content holder-->
        <main class="shadow">
            <div id="midbar" class="row">
                <!-- Left panel-->
                <div id="lside" class="col-sm-4 col-md-3 col-lg-3 container-fluid">
                    <!-- Holder for included element-->
                    <div id="calendar" class="container-fluid shadow  hidden-xs">
                        <h4>Events Calendar</h4>
                        <?php include 'inc/calendar/cal.php'; ?>
                    </div>
                    <!-- Holder for included element-->
                    <div id="newsbox" class="container-fluid shadow leftbox">
                        <h4>Recent News</h4>
                        <div class="leftcontent">
                            <?php include 'inc/newsListshort.php'; ?> </div>
                    </div>
                    <div class="container-fluid">
                        <?php include 'inc/userform.php';?>
                    </div>
                    <div id="sponsors" class="container-fluid shadow leftbox hidden-xs">
                        <h4>Sponsors</h4>
                        <div class="leftcontent">
                            <?php include 'inc/sponsorListshort.php'; ?> </div>
                    </div>
                </div>
                <!-- End of Left panel-->
                <!-- Right panel-->
                <div id="rside" class="col-sm-8 col-md-9 col-lg-8 container-fluid">
                    <section>
                        <header>
                            <h1>Curling Club for You</h1> </header>
                        <main>
                            <div class="row">
                                <br />
                                <article>
                                    <div class="row">
                                        <div class="container-fluid image small"> <img src="img/web/trophy.png" alt="curling coach" class="img img-responsive"> </div>
                                        <h3>Curling in the Scottish Borders</h3>
                                        <p class="text"> The ice rink is built up of many clubs from around the Scottish borders. It used to be back in the day the club that you would join would be dependant in the area that you lived in. Not any more. Clubs tend to play at different times to suit the majority of their members and have a vast selection of ability within them. So if there is a time of day that would suit you best for example early in the day or late at night or even doesn't matter then you would take this into consideration. Other reasons to join a club would be if you know anyone within that club or have been approached by them. </p>
                                        <br /> </div>
                                    <h3>What is Curling and it's Benefits?</h3>
                                    <p class="text"> Curling comes with many benefits which range from the health and fitness aspects to the social aspect. To the the left is a short 2 minute video created by the Canadian Curling Association which explains the aim and rules of how to play curling.</p>
                                    <br /> Some benefits to this sport are listed below:
                                    <br />
                                    <p>
                                        <ul class="text">
                                            <li> Any age or ability can enjoy - Do not worry as curling is played by all ages and is a great way to keep yourself active. It also does not matter if you have never stepped onto ice before or whether you have been playing for years. This sport is great for getting everyone playing together and helping each other achieve their goals. </li>
                                            <br>
                                            <li> This may look like a slow paced game but believe this, your body gets a fair workout. From muscles you probably didnot know you had to getting the old ticker moving, you will feel the benefits from taking part within this cool sport. </li>
                                            <br>
                                            <li> Teamwork and Communication - This is a key part of the game. As a team you'll take it in turns to throw stones down the ice towards the house and another team member who will judge the line. The remaining two members will judge the speed and everyone will communicate their role to each other to ensure the stone gets the desired shot that was asked for. </li>
                                            <br>
                                            <li> Sociable - As much as it can be a competitive sport it is also a very sociable sport where you are able to meet new people and form new friendships. In between shots you will find curlers talking to one another between sheets and catching up on any new gossip but curling doesn't just stop on the ice. It moves upstairs to the lounge. Teams enjoy a drink after their games and talk about the match and discuss any topics that may be of interest to one another. Though you don't have to just go up to lounge if you have played a game but just pop along and watch some of the curling with a cold beverage relaxing with the other spectators. </li>
                                            <br>
                                            <li> Inexpensive - Compared to some sports this can be relatively cheap and good value for money. Games vary in price depending on the time of day and a membership to the club will not cost you anywhere near the same as an annual golf subscription. </li>
                                            <br> </ul>
                                    </p>
                                    <p class="text"> These are just a few of the many benefits that curling has to offer. So don't leave it any longer than you have to. Come along by yourself, the family or with some friends and become part of a larger community. </p>
                                </article>
                            </div>
                        </main>
                    </section>
                </div>
                <!--End of Right panel-->
            </div>
        </main>
        <!-- Footer holder-->
        <footer class="shadow">
            <div id="bottom" class="row">
                <p> Created by K. Luc for New College Lanarkshire - 2017 </p>
            </div>
        </footer>
    </body>

    </html>
