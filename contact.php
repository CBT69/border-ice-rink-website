<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>Contact Border Ice Rink</title>
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
                            <h1>Contact Us</h1>
                            <br> </header>
                        <main>
                            <h2>
              Border Ice Rink <br>
              Golf Course Road <br>
              Kelso<br>
              Roxburghshire<br>
              TD5 7SL
            </h2>
                            <h4>
              admin@bordericerink.co.uk<br>
              Tel: 01573 224 774<br>
              Fax: 01573 226 908<br>
            </h4>
                            <div>
                                <br />
                                <br />
                                <h3>
                Border Curling Development Group (BCDG)<br />
                Point of Contact</h3>
                                <h4>
                  Helen Mathieson<br />
                  Tel: 01890 830 717 / 07967 873 438<br />
                  thesmiddyfolk@btinternet.com<br />
                </h4> </div>
                            <div>
                                <br />
                                <br />
                                <h3>
                Skating Club<br />
              </h3>
                                <h4>bordericeskatingclub@talktalk.net</h4>
                                <h4>
                Anne Innes<br />
                Tel: 01573 225 894<br />
              </h4>
                                <h4>
                Alison Dagg<br />
                Head Coach<br />
                Tel: 01573 223 347<br />
              </h4> </div>
                            <br />
                            <div class="row">
                                <div class="mapouter center">
                                    <div class="gmap_canvas">
                                        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Golf Course Road, Kelso, Wielka Brytania, &t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://wpicus.com">pink stripy wordpress theme</a></div>
                                    <style>
                                        .mapouter {
                                            overflow: hidden;
                                            height: 500px;
                                            width: 600px;
                                        }

                                        .gmap_canvas {
                                            background: none!important;
                                            height: 500px;
                                            width: 600px;
                                        }
                                    </style>
                                </div>
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
