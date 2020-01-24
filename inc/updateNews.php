<?php
session_start();
include "../inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>News Edit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Border Ice Rink. Scottish Curling and Ice Skating Club">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="../js/jquery.lightbox-0.5.min.js"></script>
        <script src="../js/jquery-1.11.3.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <script src="" type="text/javascript"></script>
    </head>
    <!-- Visible content -->

    <body class="container-fluid">

        <!-- Content holder-->
        <main class="shadow">
            <div id="midbar" class="row">
              <?php
              // Get the ID from URL.
              $id = ( isset($_GET["id"]) && !empty($_GET["id"]) ? $_GET["id"] : "");

              $query="SELECT  * FROM news WHERE IDnews= $id";

              $result=mysqli_query($conn, $query);
               while($row=mysqli_fetch_array($result)){
                   $IDnews=$row['IDnews'];
                   $date=$row['date'];
                   $title=$row['title'];
                   $image=$row['image'];
                   $author=$row['author'];
                   $content=$row['content'];
               }
              ?>
                <!-- Right panel-->
                <div id="rside" class="container-fluid">
                    <section>
                        <header>
                            <h1>Edit Article</h1> </header>
                        <main>
                            <div>
                                <div id="editor" class="container-fluid center">
                                  <!-- Update Inputs Form+++++++ -->
                                  <form action="doUpdate.php" method="post">
                                      <table class="center table">
                                          <tr>
                                              <td><p>Article ID: </p>
                                                  <input type="text" name="IDnews" value="<?php echo " $IDnews ";?>"> </td>
                                              <td><p>Date: </p>
                                                  <input type="date" name="date" placeholder="yyyy-mm-dd" value="<?php echo " $date ";?>"> </td>
                                              <td><p>Title: </p>
                                                  <input type="text" name="title" value="<?php echo " $title ";?>"> </td>
                                          </tr>
                                          <tr>
                                              <td><p>Image: </p>
                                                  <input type="text" name="image" value="<?php echo " $image ";?>"> </td>
                                              <td><p>Author: </p>
                                                  <input type="text" name="author" value="<?php echo " $author ";?>"> </td>
                                              <td><p>Content: </p>
                                                  <input type="text" name="content" value="<?php echo " $content ";?>"> </td>
                                          </tr>
                                        </table>
                                        <br />
                                          <input type="submit" name="update" value="Update Record" class="btn btn-danger">
                                  </form>
                                  <div>
                                      <button onclick="goBack()" class="btn btn-success">Go Back</button>
                                      <script>
                                          function goBack() {
                                              window.history.back();
                                          }
                                      </script>
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
                <p> Created by K. Luc for New College Lanarkshire - 2017 </p>
            </div>
        </footer>
    </body>

    </html>
