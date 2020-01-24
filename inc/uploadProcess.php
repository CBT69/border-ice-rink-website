<?php
session_start();
include "connaddress.php";?>
<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Admin Area</title>
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
    <body>
      <body class="container-fluid">
          <main class="shadow">
              <div id="midbar" class="row">
                  <!-- Right panel-->
                      <section>
                          <header>
                            <div>
                            <?php /* This is a safety check to make sure the file being uploaded is in fact an image file in a suitable format. It also stops files over 500Kb from being uploaded*/
                            if ((($_FILES["file"]["type"] == "image/gif")
                                 || ($_FILES["file"]["type"] == "image/jpeg")
                                 || ($_FILES["file"]["type"] == "image/png")
                                )
                                && ($_FILES["file"]["size"] < 2000000)) {

                                /* This checks to see if the file already exists in the designated folder and if it does a message is displayed otherwise it is uploaded and a message is displayed */

                            if (file_exists("../img/productPics/" . $_FILES["file"]["name"]))
                                {
                                echo $_FILES["file"]["name"] . " already exists. ";
                                }
                                else {
                                    move_uploaded_file($_FILES["file"]["tmp_name"],
                                    "../img/news/" . $_FILES["file"]["name"]);
                                    echo "Successful upload " . $_FILES["file"]["name"];
                                }
                            }
                            else {
                                echo "Wrong file type!! Could be the file is too big".$_FILES["file"]["type"];
                                 }
                            ?>
                            </div>
                              <br />
                          <main>
                            <a href="../imageupload.php">Upload another photo</a>
                            <br /><br />
                            <a href="../admin.php">Finished</a>
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
