<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>Prices</title>
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
                            <h1>Price List</h1> </header>
                        <main>
                            <article>
                                <h3>Corporate</h3>
                                <div>
                                    <br>
                                    <p class="text"> Do you fancy trying something new? A bit of team building? Why not book your business or group in for a session of curling. Curling is a great sport for any ages and is a great way to improve communication between each other. We offer the opportunity for some fun coaching with a competition afterwards to perfect what you have just learnt. The competition can be as laid back or as competitive as the players make it and you will be guaranteed to have fun. </p>
                                    <p class="text"> So what is involved:- </p>
                                    <br />
                                    <p class="text"> Cost - Please contact the ice rink to find out the price of your session. This can vary depending on how long and how many people come along. </p>
                                    <p class="text"> Session Duration - You will have a minimum of 2 hours on the ice. This can be extended to suit your needs (depeneding on ice availability). </p>
                                    <p class="text"> Catering - Would like a small buffet, soup and sandwiches or even a three course meal? All food is made fresh on site. Please advise us of any catering needs to add to your experience on the day. Check out the catering page for more details. </p>
                                    <p class="text"> Included within your session - Ice Fees are paid for. All equipment is provided. 30 minutes of coaching and 90 minutes of game time. (These are based on the minimum session time of 2 hours). </p>
                                    <p class="text"> What to where - Loose, comfortable and warm clothing is advised. Jeans are not suitable as they restrict movement. Clean, flat soled shoes are essential ie trainers. Boots or heels are not suitable. </p>
                                    <p class="text"> Format - On the day, qualified coaches will teach you the basics of the game; how to deliver a stone, how to sweep, the objectives of the game and basic tactics in the first 30 minutes. For the remaining 90 minutes, you can perfect your skills in a friendly game overseen by coaches. (This can also be altered to suit your needs. If more coaching is required. Please note for first time curlers the 30 minutes coaching is required). </p>
                                </div>
                            </article>
                            <br />
                            <article>
                                <h2>Skating Club Fees and Information</h2>
                                <h3>Season 2016 - 2017</h3>
                                <br>
                                <h3>Non Members</h3>
                                <div>
                                    <h4>
                    Entry costs  |  £5.00<br />
                    Skate Hire  |  £2.50<br />
                    Family Pass (2 adults and 2 Children under 16) | £20<br />
                    Skate Sharpening  |  £5.00<br />
                  </h4> </div>
                                <div>
                                    <br>
                                    <h3>Members</h3>
                                    <h4>
                    Membership | £25.00<br />
                    Each Skating Session | £5.00<br />
                    Hire of Skates (from small size 8) | £1.50<br />
                    Skate Sharpening | £5.00
                  </h4>
                                    <p> Figure Skates required for lessons (No hockey skates to be worn) </p>
                                    <p> Session Times | Sundays 12:15 - 14:15
                                        <br /> (No skating club on Sunday 27th November 2016) </p>
                                    <p> First Club Session is on Sunday 02nd October 2016
                                        <br /> Final Club Session is on Sunday 26th March 2017 </p>
                                </div>
                            </article>
                        </main>
                    </section>
                </div>
                <!--End of Right panel-->
            </div>
        </main>
        <!-- Footer holder-->
        <footer class="shadow">
            <div id="bottom" class="row">
                <p> Created by Creative Break Time for New College Lanarkshire - 2017 </p>
            </div>
        </footer>
    </body>

    </html>
