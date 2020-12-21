<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/express-favicon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>BeelzaBurger</title>

        <!-- Icon css link -->
        <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linears-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       
       <div id="preloader">
            <div class="loader absolute-center">
                <div class="loader__box"><b class="top"></b></div>
                <div class="loader__box"><b class="top"></b></div>
                <div class="loader__box"><b class="top"></b></div>
            </div>
        </div>
       
        <!--================ Frist hader Area =================-->
         <header>
           <nav>
               <div class="main-wrapper">
                  
                   <div class="nav-login">
                       <?php
                            if (isset($_SESSION['username'])) {
                              echo '<form action="includes/logout.inc.php" method="POST">
                                    <button type="submit" name="submit">Logout</button>
                                    </form>'; 
                            } else {
                              echo '<form action="includes/login.inc.php" method="POST">
                                    <input type="text" name="username" placeholder="Username/E-mail">
                                    <input type="password" name="password" placeholder="password">
                                    <button type="submit" name="submit">Login</button>
                                    </form>
                                    <a href="signup.php">Sign up</a>';
                            }
                       
                       ?>
                       
                       
                   </div>
                   
               </div>
           </nav> 
            
        </header>
        <!--================End Footer Area =================-->
        
        <!--================End Footer Area =================-->
        <header class="main_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="" alt=""></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="home.php">Home</a></li>
                            <li><a href="table.php">Table & Menu</a></li>
                            <li><a href="kitchendisplay.php">Kitchen Orders</a></li>
                            <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--================End Footer Area =================-->
        
        <!--================Banner Area =================-->
        
        <!--================End Banner Area =================-->
        
        <!--================End Our feature Area =================-->
        
        <section class="most_popular_item_area menu_list_page">
            <div class="container">
                <div class="popular_filter">
                <h1>SELECT 1ST EXTRA FOR TABLE: <?php
                echo $_SESSION['ordernum'];
                ?></h1>
                    <ul>
                        <li class="active" data-filter="*"><a href="">All</a></li>
                    </ul>
                </div>
                
                <div class="p_recype_item_main">
                    <div class="row p_recype_item_active">
                        <?php
                            $dbServername = "localhost";
                            $dbUsername = "root";
                            $dbPassword = "";
                            $dbName = "menu";

                            // Create connection

                            $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

                            $ordernum = $_SESSION['ordernum'];
                            $sidemenu = "sidemenu";


                            // Check connection
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            $sql = "SELECT id, itemname, picture FROM $sidemenu ORDER BY id";
                            $result = mysqli_query($conn, $sql);


                            while($sidemenu = mysqli_fetch_assoc($result)) {
                                $id = $sidemenu['id'];
                                $itemname = $sidemenu['itemname'];
                                $picture = $sidemenu['picture'];
                                ?>
                            <div class="col-md-4 col-sm-6 <?php echo htmlspecialchars($itemtype); ?>">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu/<?php echo htmlspecialchars($picture); ?>" alt="">
                                    <div class="icon_hover">
                                        <form action="updates/updateextra1.php" method="post">
                                            <input type="hidden" name="itemname" value="<?php echo htmlspecialchars($itemname); ?>">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                        </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span><?php echo htmlspecialchars($itemname); ?></span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                </div>
                            </div>
                        </div>
                        <?php

                            }// end while loop
                        ?>
                        <!--- <div class="col-md-4 col-sm-6 indoor">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu/Bacon.jpg" alt="">
                                    <div class="icon_hover">
                                    <form action="updates/updateextra1.php" method="post">
                                            <input type="hidden" name="firstextra" value="Bacon">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>BACON</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 indoor">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu/Lettuce.png" alt="">
                                    <div class="icon_hover">
                                    <form action="updates/updateextra1.php" method="post">
                                            <input type="hidden" name="firstextra" value="Lettuce">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>LETTUCE</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 indoor">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu/Tomato.png" alt="">
                                    <div class="icon_hover">
                                    <form action="updates/updateextra1.php" method="post">
                                            <input type="hidden" name="firstextra" value="Tomato">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>TOMATO</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 indoor">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu/Onion.png" alt="">
                                    <div class="icon_hover">
                                    <form action="updates/updateextra1.php" method="post">
                                            <input type="hidden" name="firstextra" value="Onions">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>ONIONS</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 indoor">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu/Pickle.png" alt="">
                                    <div class="icon_hover">
                                    <form action="updates/updateextra1.php" method="post">
                                            <input type="hidden" name="firstextra" value="Pickles">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>PICKLES</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 indoor">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu/Mushroom.png" alt="">
                                    <div class="icon_hover">
                                    <form action="updates/updateextra1.php" method="post">
                                            <input type="hidden" name="firstextra" value="Mushrooms">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>MUSHROOMS</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 indoor">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu/Cheese.png" alt="">
                                    <div class="icon_hover">
                                    <form action="updates/updateextra1.php" method="post">
                                            <input type="hidden" name="firstextra" value="Cheese">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>CHEESE</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 indoor">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu/Peppers.png" alt="">
                                    <div class="icon_hover">
                                    <form action="updates/updateextra1.php" method="post">
                                            <input type="hidden" name="firstextra" value="Peppers">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>PEPPERS</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 indoor">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu/Noextras.png" alt="">
                                    <div class="icon_hover">
                                        <form action="updateextraall.php" method="post">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>NOTHING</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                </div>
                            </div>
                        </div>--->
                    </div>
                </div>
            </div>
        </section>            
        
        <!--================End Our feature Area =================-->
        
        <!--================End Recent Blog Area =================-->
        <footer class="footer_area">
            <div class="footer_widget_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="f_widget about_widget">
                                <div class="f_w_title">
                                <h4>ABOUT</h4>
                                </div>
                                <p>Link to my github here to see other projects.</p>
                                <ul>
                                    <li><a href="https://github.com/Beelzfaster/"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                    
                        
                    </div>
                </div>
            </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="pull-left">
                        <h5><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p></h5>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Recent Blog Area =================-->
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootatrap-date-time/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/countdown/jquery.countdown.js"></script>
        <script src="vendors/js-calender/zabuto_calendar.min.js"></script>
        
        <!--gmaps Js-->
<!--        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>-->
<!--        <script src="js/gmaps.min.js"></script>-->
        
        
<!--        <script src="js/video_player.js"></script>-->
        <script src="js/theme.js"></script>
    </body>
</html>
