<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>Skating Clubs</title>
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
                            <h1>Ice Skating Club</h1> </header>
                        <main>
                            <h3>If you are 16 years and under and would like to learn to skate come along and give it a go</h3>
                            <div class="row">
                                <div class="container-fluid image small"> <img src="img/web/skating.jpg" alt="ice rink view" class="img img-responsive"> </div>
                                <br>
                                <p class="text"> The Border Ice Rink Skating Club was founded in 1966 with the aim of teaching children how to skate. Through the years many Border children have benefitted from the expertise of our volunteer tutors and some have gone on to skate professionally for Ice Show companies like 'Holiday on Ice'. </p>
                                <p class="text"> The Border Ice Rink Skating Club was founded in 1966 with the aim of teaching children how to skate. Through the years many Border children have benefitted from the expertise of our volunteer tutors and some have gone on to skate professionally for Ice Show companies like 'Holiday on Ice'. </p>
                                <p class="text"> The club offers tuition for children up to the age of 16 in a structured form, which allows them o progress from 'complete beginner' to ' accomplished skater' whilst most importantly, still having fun. Children have regular assessments and to round off the season, they are encouraged to take part in competitions geared to the standard of their group. The more advanced skaters can perform one and a half and two minute programs to music. </p>
                                <p class="text"> The club meets every sunday from October to March, at 12:15, at the Border Ice Rink, in Kelso. New members are very welcome and there is a trial period of two weeks before a membership fee is payable. </p>
                                <p class="text"> For members who wish to benefit from additional tuition, there is extra morning ice, before the main club session starts.. </p>
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
