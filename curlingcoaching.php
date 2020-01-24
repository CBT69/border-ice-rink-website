<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>Curling Coaching</title>
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
                            <h1>Coaching</h1> </header>
                        <br />
                        <main>
                            <div class="row">
                                <div class="container-fluid image small"> <img src="img/web/coach.png" alt="curling coach" class="img img-responsive"> </div>
                                <p class="text"> As mentioned above there is no need to worry if you have never thrown a stone in your life. It's never too late to start. The coaching is run by Border Curling Development Group and follows the Royal Caledonian Curling Club programme. There is coaching available for all ages and from complete novice to aspiring curler. If you feel that you would like get the basics given to you or feel that there are some aspects of your game that you would like to tweak then please head over to the coaching page or click here. Curling is not just for the able bodied and if you feel that you or someone you know would like to try this, then there is some wheelchair coaching that happens on a saturday morning. This group is a growing club and if you would like to find out more you can contact them via the Curling clubs page by clicking here. You can also find out more information on the wheelchair coaching page by clicking here. Maybe we still haven't sold it to you. Well heres a opportunity you can't resist. Try Curling is an RCCC initiative where you can book yourself in and get the fundamentals taught to you and have a real feel for what curling is like. Even better yet it will cost you less than a meal deal at your local supermarket. There are limited dates and also limited availability so please keep an eye on the Try Curling page by clicking here. </p>
                            </div>
                        </main>
                    </section>
                    <br />
                    <section>
                        <main>
                            <h3>Learn how to curl at Border Ice Rink</h3>
                            <div>
                                <br />
                                <p class="text"> Our coaching sessions are led by Border Curling Development Group and follow the Royal Caledonian Curling Club (RCCC - governing body for curling) coaching programme. The coaches that are used are all RCCC qualified coaches. Each session has it's own structure and will help develop and improve your curling ability. </p>
                                <p class="text"> These sessions that are available are for anyone of any ability. From complete novice to accomplished curler. If you have any queries about any coaching session please fill out the form below which will send a message to our Border Curling Development Group point of contact. </p>
                                <p class="text"> Items to take into consideration when coming along to our coaching sessions are as follows:- </p>
                                <ul class="text">
                                    <li> Wear Warm loose fitting clothing.</br>
                                    </li>
                                    <li> Clean trainers</br>
                                    </li>
                                    <li> Equipment is all at the ice rink, but you may bring your own if you please</br>
                                    </li>
                                </ul>
                                <p class="text"> You may feel now that you would like to move on and have a few fun, sociable games. Many people like to join the club linked to the area where they live. This is not a must as you may have some friends or family part of a different club. Just give the club that you would like to join a phone and then you will be able to move on with your curling career. Curling Club contact details can be found on the curling clubs page. </p>
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
