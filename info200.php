<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>200+</title>
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
                            <h1>200+ Raffle</h1>
                            <p> Registered under the small lotteries act </p>
                        </header>
                        <main>
                            <h3>Draws every month</h3>
                            <br />
                            <div class= "row">
                                <p class="text"> How do you fancy the chance of winning £50 each month? Who wouldn't? The 200+ club is a draw that is done monthly. At each draw, numbers are picked at random and four lucky people win themselves a cash prize. That's not all, because every December 'A Big Draw' is done where a total of £250 can be won +£50 added if you are at the draw or in the rink. </p>
                                <p class="text"> if this £50 is not won on the night it is added to the following year making a bonus of £100 and so on each year. </p>
                                <p class="text"> If your feeling lucky, then this is how you can get involved. The 200+ club is a 12 month subscription of £12 (That's just £1 a month!) The draw runs from December to November. </p>
                                <h3>The monthly prizes are:</h3>
                                <h4>1 x £50</h4>
                                <h4>3 x £12</h4>
                                <br />
                                <h3>Ways to pay:</h3>
                                <h4>Preferred Method:- By standing order</h4>
                                <h4>You may also pay at the Border Ice Rink Office or Bar, By Cheque, Cash or Card.</h4>
                                <h4>By phone to 01573 224 774 using your card</h4>
                                <h3>'The Big Draw'</h3>
                                <h4>The Christmas Big Draw takes place after the Swan Trophy Final in December.</h4>
                                <h4>The normal monthly draw is made which is followed by the draw for £250
(or £350.00 if the winner is in the building)</h4>
                                <h2>The 2016 BIG DRAW NIGHT</h2>
                                <h2>Friday 16th December 2016</h2> </div>
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
