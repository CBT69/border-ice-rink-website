<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>Edit News</title>
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
                            <h1>Edit News</h1> </header>
                        <br />
                        <main>
                            <div>
                                <br />
                                <div id="addNews" class="container-fluid">
                                    <br />
                                    <input type="button" id="add" onclick="toggle_visibility('hiding');" value="Add News" class="shadow btn btn-hide">
                                    <div id="hiding" class="hidingdiv">
                                        <br />
                                        <form name="news" class="" method="post" action="inc/newsaddProcess.php">
                                            <table class="center table-responsive">
                                                <tr>
                                                    <td>Title:</td>
                                                    <td>
                                                        <input type="text" name="title" placeholder="Title"> </td>
                                                </tr>
                                                <tr>
                                                    <td>Date:</td>
                                                    <td>
                                                        <input type="date" name="date" placeholder="yyyy-mm-dd"> </td>
                                                </tr>
                                                <tr>
                                                    <td>Author:</td>
                                                    <td>
                                                        <input type="text" name="author" placeholder="Author"> </td>
                                                </tr>
                                                <tr>
                                                    <td>Image path:</td>
                                                    <td>
                                                        <input type="text" name="image" placeholder="Directory"> </td>
                                                </tr>
                                                <tr>
                                                    <td>Content:</td>
                                                    <td>
                                                        <input type="text" name="content" placeholder="Article"> </td>
                                                </tr>
                                            </table>
                                            <br />
                                            <input type="submit" name="add_news" value="Add" class="btn btn-sm btn-danger"> </form>
                                    </div>
                                    <br />
                                    <br /> </div>
                                <script type="text/javascript">
                                    $('#add').click(function (e) {
                                        e.preventDefault();
                                        $('#hiding').toggle();
                                    });
                                </script>
                            </div>
                            <br />
                            <div>
                                <button onclick="goBack()" class="btn btn-success">Go Back</button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
                            <h2>News List</h2> </main>
                        <?php include 'inc/newsList.php';?>
                    </section>
                    <div>
                                <button onclick="goBack()" class="btn btn-success">Go Back</button>
                                <script>
                                    function goBack() {
                                        window.history.back();
                                    }
                                </script>
                            </div>
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
