<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>Skating Events</title>
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
                            <h1>Ice Skating Events</h1> </header>
                        <main>
                            <br />
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-6 hidden-xs">
                                    <div class="container-fluid image"> <img src="img/web/iceskating.jpg" alt="ice skating people" class="img img-responsive"> </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div>
                                        <h3>Public Skating</h3>
                                        <h4>Sunday | 14:45 PM - 17:15 PM</h4>
                                        <h3>Ice Disco</h3>
                                        <h4>Saturday | 18:00 PM - 20:30 PM</h4>
                                        <h5>Will take place on the following dates:</h5>
                                        <h5>Friday 30th December 2016</h5>
                                        <h5>28th January 2017</h5>
                                        <h5>25th February 2017</h5>
                                        <h5>25th March 2017</h5> </div>
                                </div>
                            </div>
                            <br />
                            <h3>Have Fun!!!</h3>
                            <br /> </main>
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
