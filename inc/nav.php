<div class="navbar-fixed-top">
    <!-- Holder for top bar-->
    <div id="banner" class="row shadow">
        <!-- Logo holder -->
        <div id="logo" class="col-xs-5 col-sm-6 col-md-2 col-lg-3">
            <div>
                <a href="index.php"><img src="img/web/logowhite.png" alt="Border Ice Ring Logo" class="logo img-responsive" /></a>
            </div>
        </div>
        <!-- Slider holder -->
        <div id="slider" class="col-xs-0 hidden-xs hidden-sm col-sm-0 col-md-7 col-lg-6">
            <?php include 'slider.php';?>
        </div>
        <!-- Login holder -->
        <div id="login" class="col-xs-7 col-sm-6 col-md-3 col-lg-3">
            <!-- Session script for login system -->
            <div>
                <?php
               if(isset($_SESSION['username'])) {
                   echo '<p class="username"> Hello, '. $_SESSION["username"] . '</p>';
                   echo '<a href="inc/logout.php">LOG OUT</a>';
                   unset($_SESSION['error']);
               } else { ?>
                    <form name="loginform" method="post" action="inc/loginCheck.php">
                        <input type="text" name="username" placeholder="E-mail">
                        <br>
                        <input type="password" name="password" placeholder="Password">
                        <br>
                        <input type="submit" name="login" value="Login here" class="btn btn-sm btn-danger"> </form>
                    <?php
                         if (isset($_SESSION['error'])){
                          echo $_SESSION['error'];
                          unset($_SESSION['error']);
                       }
          }
          ?>
            </div>
            <!-- End of Script -->
        </div>
    </div>
    <!-- End of Top bar holder -->
    <!-- Navbar holder -->
    <nav class="navbar shadow">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li> <a href="index.php">Home</a> </li>
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="curling.php">Curling<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="curlingevents.php">Competitions</a></li>
                            <li><a href="curlingclubs.php">Curling Clubs</a></li>
                            <li><a href="curlingcoaching.php">Coatching</a></li>
                            <li><a href="curlingladies.php">Ladies Section</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="skating.php">Ice Skating<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="skatingclub.php">Skating Club</a></li>
                            <li><a href="skatingevents.php">Skating Events</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="news.php">News<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="news.php">E-News</a></li>
                            <li><a href="newscalendar.php">Calendar</a></li>
                            <li><a href="instagram.php">Instagram</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="staff.php">Management<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="sponsors.php">Sponsors</a></li>
                            <li><a href="staff.php">Staff</a></li>
                            <li><a href="admin.php">Admin Area</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="info.php">Info Board<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="info200.php">200+</a></li>
                            <li><a href="infocatering.php">Catering</a></li>
                            <li><a href="infoprices.php">Prices</a></li>
                            <li><a href="info.php">About Us</a></li>
                        </ul>
                    </li>
                    <li> <a href="contact.php">Contact</a> </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
