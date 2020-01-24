<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>About Border Ice Rink</title>
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
                    <div class="row">
                        <article>
                            <header>
                                <h1>How It Began</h1> </header>
                            <h3>The Birth of  "The Friendly Rink of The Border"</h3>
                            <div>
                                <p class="text"> The Border Ice Rink was the brainchild of local farmer Willie Wilson. Willie who sadly died in 1998 was a past president of the Royal Caledonian Curling Club and was the main inspiration behind the fund raising to form a company to build the rink we all take today for granted. </p>
                                <p class="text"> The Border Ice Rink was in the planning for a few years and was built and opened on 1st October 1964. The design was based on the Canadian style soft base ice pad (brine pipes bedded in loose gravel), which was effective and economical in construction. </p>
                                <p class="text"> Border's curlers used to travel to Haymarket ice rink in Edinburgh to curl and always dreamed of having their own rink in the Borders. Willie Wilson helped make that dream come true. </p>
                                <p class="text"> Since the rink was opened there has been understandably considerable changes. The main things being: <br>
                                    <br>
                                    <ul class="text">
                                        <li> Replacing the ice pad with a much more economic insulated concrete base to reduce running costs and be more environmentally friendly.<br>
                                        </li>
                                        <li> Updating the ice preparation equipment with the use of an Ice King, Nipper and incorporating deionised water to produce a better playing surface. <br>
                                        </li>
                                        <li> Introduction of a Zamboni ice cutting machine to keep the ice depth down, again this continues the theme of reducing running costs and being more environmentally friendly.<br>
                                        </li>
                                        <li> Total upgrade of the kitchen and bar areas </li>
                                    </ul>
                                </p>
                                <p class="text"> This work never stops and is ongoing... </p>
                            </div>
                        </article>
                    </div>
                    <br />
                    <div class="row">
                        <article>
                            <header>
                                <h3>The Club Lounge</h3> </header>
                            <div class="clearboth">
                                <div class="container-fluid image small"> <img src="img/web/lounge1.jpg" alt="lounge" class="img img-responsive"> </div>
                                <p class="text"> We have a beautiful, large viewing gallery that allows our members to sit back and relax with an ice cold beverage, some good company and some local curling. The lounge has just under 100 chairs and 8 tables with an additional 6 folding tables. This is a members bar that can be used for curling functions alongside a curling event or even just for a club event. Although we have our cafe downstairs, we can provide the service to have your food served in the comfort of the lounge whether it be for a function or for a quick snack between games. </p>
                            </div>
                        </article>
                    </div>
                    <br />
                    <div class="row">
                        <article>
                            <header>
                                <h3>The Cafe</h3> </header>
                            <div>
                                <div class="container-fluid image small"> <img src="img/web/lounge2.jpg" alt="caffe room" class="img img-responsive"> </div>
                                <p class="text"> Our cafe has a light, fresh feel to it where you can sit and enjoy your morning coffee or your evening dinner. There are 36 chairs and 4 tables with an additional 6 stools for sitting along the window where you can sit and watch the curling or skating in action. The cafe is open to anyone whether you are familiar with the facility or not. If you would like to have a look at the menu and see what is on offer then check out the catering page </p>
                            </div>
                        </article>
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
