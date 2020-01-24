<?php
session_start();
include "inc/connaddress.php";
?>
    <html>
    <!DOCTYPE HTML>

    <head>
        <meta charset="utf-8">
        <title>Catering</title>
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
                            <h1>Catering</h1> </header>
                        <br>
                        <article>
                            <p class="text"> The Cafe is open from half an hour before the first Ice of the day, and will usually be in operation after every session coming off. However we will remain open all day by prior arrangement or when the business requires. </p>
                            <p class="text"> We offer snacks, from freshly made soups, sandwiches, jacket potatoes, paninis, omelette's and burgers. There is also a good selection Daily Specials from comfort favourites such Fish and Chips, Scampi, Bangers and Mash, Pasta Dishes, Casseroles, Curries </p>
                            <h3>Pleast Note</h3>
                            <p class="text"> The below are quoted with members prices and there will be an additional surcharge of 15% for non member bookings.<br>
                                <br> The Cafe closes at 8.00pm daily with last orders being taken at 7.30pm for those coming off from their evening game<br>
                                <br> We are happy to cater for any special dietary requirement with advance notice. </p>
                        </article>
                    </section>
                    <br />
                    <section>
                        <header>
                            <h2>Our Offer</h2> </header>
                        <br>
                        <main>
                            <article>
                                <h3>Breakfast Roll and Tea / Coffee</h3>
                                <h4>
                Bacon, Sausage, Haggis or Egg</h4> <br>
                                <p> £4.00 per head </p>
                                <br /> </article>
                            <article>
                                <h3>Soup and Roll</h3>
                                <h4>
              </h4> <br>
                                <p> £3.50 per head </p>
                                <br /> </article>
                            <article>
                                <h3>Afternoon Tea</h3>
                                <h4>
                Assorted Finger Sandwiches
                Homemade Buttered Scones <br />with Jam and Whipped Cream<br />
                A Selection of Traybakes<br />
                Tea or Coffee
              </h4> <br>
                                <p> £6.00 per head </p>
                                <br /> </article>
                            <article>
                                <h3>Finger Buffet</h3>
                                <h4>
                Various Quiches
                Chicken Goujons with Garlic Mayonnaise <br />
                Scampi Bites with Homemade Tartare Sauce<br />
                Sausage Rolls, Mini Pork Pies, Scotch Eggs and Pickles<br />
                Selection of Sandwiches
              </h4> <br>
                                <p> £7.50 per head </p>
                                <br /> </article>
                            <article>
                                <h3>Cold Buffet</h3>
                                <h4>
                Home Baked Ham and Pineapple<br />
                Coronation Chicken<br />
                Roast Beef<br />
                Poached Salmon<br />
                A Selection of Mixed, Green and Compound Salads<br />
                Minted New Potatoes<br />
                Crusty Bread and Butter<br />
              </h4> <br>
                                <p> £7.50 per head </p>
                                <br /> </article>
                            <article>
                                <h3>Sharing Platters</h3>
                                <h4>
                Homemade Pizza Selection<br />
                Loaded Chilli and Cheese Nachos with Sour Cream and Salsa<br />
                Homecut Chips<br />
                Chicken Dippers<br />
              </h4> <br>
                                <p> £8.00 per head </p>
                                <br /> </article>
                            <article>
                                <h3>Coffee and Tea</h3> </br>
                                <p> Available for £1.20 extra </p>
                                <br /> </article>
                            <article>
                                <h2>Table Served Dinner Menu Selector</h2>
                                <h3>
                Starter
              </h3> <br>
                                <h4>
                Soup of the Day with Crusty Roll and Butter<br />
                Chicken Liver Pate with Red Onion Marmalade and Oatcakes<br />
                Fan of Melon with Prawns in Marie Rose Sauce<br />
                Smoked Salmon Terrine with Granary Toast Fingers<br />
                Creamed Garlic Mushrooms with Herb Croute<br />
              </h4>
                                <h3>
                Main Course
              </h3> <br>
                                <h4>
                Breast of Chicken filled with Haggis in a Whisky Sauce and Mushroom Cream Sauce<br />
                Medallions of Pork Fillet with Provencale Sauce and Mozzarella Glaze<br />
                Delice of Salmon crowned with Asparagus in a Lemon Cream Sauce<br />
                Braised Lamb Shank in a Redcurrant and Rosemary Jus<br />
                Roasted Sweet Peppers filled with Wild Mushrooms in Cous Cous with a Pesto Cream<br />
              </h4>
                                <h3>
                Puddings
              </h3> <br>
                                <h4>
                Banana and Salted Caramel Pancake with Vanilla Ice<br />
                Strawberry Shortbread Stack with Chantilly Cream<br />
                Brandy Snap Basket of Lemon Syllabub on a Raspberry Coulis<br />
                Warm Chocolate Brownie with Vanilla Ice<br />
              </h4>
                                <h4>
                BUILD YOUR MENU, choosing ONE DISH for each course<br />
                Special Diets may be catered for with separate options</h4>
                                <br />
                                <p> Three Courses £17.50 </p>
                                <p> Two Courses £14.00 </p>
                                <p> Coffee and Mints £1.50 extra </p>
                                <p> Includes Table Linen </p>
                                <br />
                                <h4>
                These are just a selection of sample dishes, we are adaptable and if there is any special dish
                you would like us to provide, we are happy to tailor a menu to suit.</h4>
                                <h4>
                Other Cold Buffet Menus can be arranged for informal parties.
              </h4>
                                <h4>
                Thank you all for your continued support.<br>
                Joe
              </h4> </article>
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
