<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>Ladies Curling Section</title>
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
                            <h1>Ladies Section</h1> </header>
                        <main>
                            <h2>Curling for Ladies</h2>
                            <br />
                            <div class="row">
                                <div class="container-fluid center"> <img src="img/web/curling4.jpg" alt="curling ladies" class="img img-responsive img-rounded"> </div>
                                <div>
                                    <h3>Elspeth Bell</h3>
                                    <h4>President</h4>
                                    <p>bellelspeth@yahoo.co.uk</p>
                                    <p>07811 291 228</p>
                                </div>
                                <div>
                                    <h3>Judith Dixon</h3>
                                    <h4>Vice President</h4>
                                    <p>judithdixon58@hotmail.com</p>
                                    <p>07957 801 347</p>
                                </div>
                            </div>
                            <div>
                                <h3>Lucy Tile</h3>
                                <h4>Treasurer / Committee </h4>
                                <p>lucy.tile@gmail.com</p>
                                <p>07798 655 248</p>
                            </div>
                            <div>
                                <h3>Glynnice Lauder</h3>
                                <h4>Secretary</h4>
                                <p>glynnicemarylauder@gmail.com</p>
                                <p>07718 963 110</p>
                            </div>
                            <div>
                                <h3>Gillian Sutherland</h3>
                                <h4>Minute Secretary</h4>
                                <p>gillysutherland@hotmail.com</p>
                                <p>07929 440 647</p>
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
                <p> Created by Creative Break Time for New College Lanarkshire - 2017 </p>
            </div>
        </footer>
    </body>

    </html>
