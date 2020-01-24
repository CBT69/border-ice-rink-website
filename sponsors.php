<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>Our Sponsors</title>
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
                            <h1>Border Ice Rink Sponsors</h1> </header>
                        <main>
                            <article>
                                <h3>
              Competition Sponsors</h3>
                                <br />
                                <p class="text"> Below is a list of all our competition sponsors, who all help us by either giving prizes for the competition winners, covering ice fees, a round of drinks at the bar and many other appreciated ways that help make each and every one of our competitions special in their own way. </p>
                                <p class="text"> A very big thanks goes to our sponsors from all of us here at Borders Ice Rink and from every ingle curler, playing or non playing member, because without you our competitions wouldn't be as special. </p>
                                <p class="text"> We still have a few competitions that unfortunately have not been as lucky enough to have the backing of a sponsor. If you feel that you would like to become one of our many great sponsors please get in contact. </p>
                                <div>
                                    <table>
                                        <tr>
                                            <td>
                                                <h4>A Hume</h4> </td>
                                            <td>
                                                <h4>Agrii</h4> </td>
                                            <td>
                                                <h4>Alan Nisbet</h4> </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4>A Hume</h4> </td>
                                            <td>
                                                <h4>Agrii</h4> </td>
                                            <td>
                                                <h4>Alan Nisbet</h4> </td>
                                        </tr>
                                    </table>
                                </div>
                            </article>
                            <article>
                                <br />
                                <h3>
                Advertising Boards</h3>
                                <p class="text"> Below is a list of all our advertising boards that have been purchased by many local companies around the Scottish Border Region. These boards are seen by our club that currently has over 400 active members, our figure skating club who also has currently over 100 up and coming athletes and our public skating that on average has 120 families enjoying a day out. </p>
                                <p class="text"> A very big thanks goes to all of our advertisers from all of us here at Borders Ice Rink and all of our customers for showing us your interest in our growing facility and helping us make it a fun and welcoming community. </p>
                                <p class="text"> We still have plenty of space for your company to advertise around our rink. If you feel that you would like to advertise at Borders Ice Rink please get in contact. </p>
                            </article>
                            <article>
                                <br />
                                <h3>
                Curling Stone Sponsorship</h3>
                                <p class="text"> Below is a list of all our curling stone sponsors that have kindly helped us purchase our new stones and handles for many more years of great curling. </p>
                                <p class="text"> A very big thanks goes to all of our sponsors from all of us here at Borders Ice Rink and all of our curlers for helping us progress our sport in the Scottish Borders Region </p>
                                <p class="text"> We still have a few more stones that could benfit from your sponsorship. If you feel that you would like to sponsor our curling stones please get in contact.. </p>
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
