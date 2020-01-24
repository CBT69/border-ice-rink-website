<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>Admin Area</title>
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
                            <h1>Admin Area</h1> </header>
                        <main>
                            <div>
                                <div id="register" class="container-fluid">
                                    <?php
                     if (!isset($_SESSION['admin'])){ ?>
                                        <div class="container-fluid">
                                            <h4>You have to be logged in as Admin</h4> </div>
                                        <div class="container-fluid">
                                            <form name="adminlog" method="post" action="inc/adminCheck.php">
                                                <input type="text" name="username" placeholder="Username">
                                                <br>
                                                <input type="password" name="password" placeholder="Password">
                                                <br>
                                                <input type="submit" name="login" value="Login here" class="btn btn-sm btn-danger"> </form>
                                        </div>
                                </div>
                                <?php
                       } else { ?>
                                    <div class="container-fluid">
                                        <h4>Hi Admin!!! Choose Action</h4></div>
                                    <div>
                                        <h3>You can add or edit events, news, sponsors and upload images </h3> </div>
                                    <br />
                                    <div>
                                        <h4><a href="editevents.php">Events</a></h4>
                                        <h4><a href="editnews.php">News</a></h4>
                                        <h4><a href="editsponsors.php">Sponsors</a></h4> </div>
                                        <h4><a href="imageupload.php">Upload Image</a></h4>
                                    <?php
                         //include "#";
                       }
                     ?>
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
