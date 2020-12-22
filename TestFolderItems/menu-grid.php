<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}
?>
<?php

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
                            <li><a href="menu-grid.php">Menu</a></li>
							<li><a href="gallery.php">Help</a></li>
							<li><a href="about-us.php">About Us</a></li>
							<li><a href="contact.php">Contact</a></li>
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
                <h1>NOW SERVING TABLE: <?php
                echo $_SESSION['ordernum'];
                ?></h1>
                <br>
                    <ul>
                        <li class="active" data-filter="*"><a href="">All</a></li>
                        <li data-filter=".break"><a href="">Alcoholic</a></li>
                        <li data-filter=".lunch"><a href="">Non-Alcoholic</a></li>                       
                        <li data-filter=".snacks"><a href="">Snacks</a></li>
                        
                    </ul>
                </div>
                
                <div class="p_recype_item_main">
                    <div class="row p_recype_item_active">
                        <div class="col-md-20 col-sm-20 break ">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/burger.jpg" alt="">
                                    <div class="icon_hover">
                                    <div style="float:left; padding: 50px">
                                        <form action="firstextra.php" method="post">
                                            <?php $_SESSION["burgertype".$_SESSION['ordernum']] = "Beef"; ?>
                                            <input type="submit" class="btn fa fa-shooping-cart" value="TABLE 1">
                                        </form>
                                        <br><br><br><br>
                                        <form action="testing.php" method="post">
                                            <input type="hidden" name="name" value="Heineken">
                                            <input type="hidden" name="price" value="5.30">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="TABLE 6">
                                        </form>
                                    </div>
                                    <div style="float:left; padding: 50px">
                                        <form action="testing.php" method="post">
                                            <input type="hidden" name="name" value="Heineken">
                                            <input type="hidden" name="price" value="5.30">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="TABLE 2">
                                        </form>
                                        <br><br><br><br>
                                        <form action="testing.php" method="post">
                                            <input type="hidden" name="name" value="Heineken">
                                            <input type="hidden" name="price" value="5.30">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="TABLE 7">
                                        </form>
                                    </div>
                                    <div style="float:right; padding: 50px">
                                        <form action="testing.php" method="post">
                                            <input type="hidden" name="name" value="Heineken">
                                            <input type="hidden" name="price" value="5.30">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="TABLE 5">
                                        </form>
                                        <br><br><br><br>
                                        <form action="testing.php" method="post">
                                            <input type="hidden" name="name" value="Heineken">
                                            <input type="hidden" name="price" value="5.30">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="TABLE 10">
                                        </form>
                                    </div>
                                    <div style="float:right; padding: 50px">
                                        <form action="testing.php" method="post">
                                            <input type="hidden" name="name" value="Heineken">
                                            <input type="hidden" name="price" value="5.30">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="TABLE 4">
                                        </form>
                                        <br><br><br><br>
                                        <form action="testing.php" method="post">
                                            <input type="hidden" name="name" value="Heineken">
                                            <input type="hidden" name="price" value="5.30">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="TABLE 9">
                                        </form>
                                    </div>
                                    <div style="float:center; padding: 50px">
                                        <form action="testing.php" method="post">
                                            <input type="hidden" name="name" value="Heineken">
                                            <input type="hidden" name="price" value="5.30">
                                            <input type="submit" class="btn fa fa-shooping-cart" value="TABLE 3">
                                        </form>
                                    </div>
                                    <div style="float:center; padding: 50px">
                                        <form action="cart.php" method="get">
                                            <input type="hidden" name="testvar" value="PLEASE WORK">
                                            <?php $_SESSION["testvar".$_SESSION['ordernum']] = "PLEASE WORK"; ?>
                                            <input type="submit" class="btn fa fa-shooping-cart" value="TABLE 8">
                                        </form>
                                    </div>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Heineken</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/guinlogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Guinness">
                                            <input type="hidden" name="drink_price" value="5.00">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.3%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Guinness</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/budlogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Budweiser">
                                            <input type="hidden" name="drink_price" value="5.75">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.3%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Budweiser</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/coorslogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Coors Light">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.3%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Coors Light</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/bulogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bulmers">
                                            <input type="hidden" name="drink_price" value="5.75">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Bulmers</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/orchlogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Orchard Thieves">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Orchard Thieves</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/rocklogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="RockShore">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint RockShore</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/beamlogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Beamish">
                                            <input type="hidden" name="drink_price" value="4.85">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.1%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Beamish</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€4.85</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/smithlogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Smithwicks">
                                            <input type="hidden" name="drink_price" value="5.00">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Smithwicks</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break ">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/bassLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bass">
                                            <input type="hidden" name="drink_price" value="4.00">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="5.2%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Bass</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€4</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/tuborgLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Tuborg">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="6.7%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Tuborg</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/fostersLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Fosters">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="5.3%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Fosters</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/carlsbergLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Carlseberg">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="5.3%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Carlseberg</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/hophouseLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Hophouse">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Hophouse</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/smithlogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Smithwicks Blonde">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.1%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pint Smithwicks Blonde</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/satzLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Satzenbrau">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="5.15%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Satzenbrau</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/coronaLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Corona">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.6%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Corona</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/orchlogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Orchard Thieves">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Orchard Thieves</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/erdingerlogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Erdinger">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Erdinger</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/erdingerAlcoholFreeLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Erdinger NA">
                                            <input type="hidden" name="drink_price" value="5.00">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="0%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Erdinger N/A</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/budlogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Budweiser">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="5.3%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Budweiser</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/bulogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Bulmers">
                                            <input type="hidden" name="drink_price" value="5.75">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Bulmers</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/bulmersLightLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Bulmers Light">
                                            <input type="hidden" name="drink_price" value="5.75">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Bulmers Light</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/bulogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Bulmers Berry">
                                            <input type="hidden" name="drink_price" value="5.75">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Bulmers Berry</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/heinlogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Heineken">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Heineken</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/smirnofficeLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Smirnoff Ice">
                                            <input type="hidden" name="drink_price" value="4.85">
                                            <input type="hidden" name="drink_desc" value="Alcopop">
                                            <input type="hidden" name="a_perc" value="5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Smirnoff Ice</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€4.85</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/wkdLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Blue WKD">
                                            <input type="hidden" name="drink_price" value="5.00">
                                            <input type="hidden" name="drink_desc" value="Alcopop">
                                            <input type="hidden" name="a_perc" value="5.5%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Blue WKD</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5</div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-4 col-sm-6 break ">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/coorslogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Coors">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.3%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Coors</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/guinlogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Guinness">
                                            <input type="hidden" name="drink_price" value="5.00">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.2%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                        
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Guiness</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/kopparbergStrawberryLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Kopparberg S&L">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.0%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Kopparberg S&L</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 break">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/kopparbergMixedFruitLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=1>
                                            <input type="hidden" name="drink_title" value="Bottle of Kopparberg MF">
                                            <input type="hidden" name="drink_price" value="5.30">
                                            <input type="hidden" name="drink_desc" value="Alcoholic">
                                            <input type="hidden" name="a_perc" value="4.2%"> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bottle Kopparberg MF</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€5.30</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/cokeLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Coke">
                                            <input type="hidden" name="drink_price" value="2.75">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Coke</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/dietCokeLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Diet Coke">
                                            <input type="hidden" name="drink_price" value="2.75">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Diet Coke</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/cokeZeroLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Coke Zero">
                                            <input type="hidden" name="drink_price" value="2.75">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Coke Zero</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/7upLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="7 up">
                                            <input type="hidden" name="drink_price" value="2.75">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>7 up</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/7upFreeLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="7 up free">
                                            <input type="hidden" name="drink_price" value="2.75">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>7 up free</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch ">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/fantaOrangeLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Fanta Orange">
                                            <input type="hidden" name="drink_price" value="2.75">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Fanta Orange</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2.75</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/fantaLemonLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Fanta Lemon">
                                            <input type="hidden" name="drink_price" value="2.75">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Fanta Lemon</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/tonicLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Schweppes Tonic">
                                            <input type="hidden" name="drink_price" value="2">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Schweppes Tonic</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/schweppesLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Schweppes Slimline">
                                            <input type="hidden" name="drink_price" value="2">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Schweppes Slimline</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/gingerAleLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Schweppes Ginger Ale">
                                            <input type="hidden" name="drink_price" value="2">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Schweppes Ginger Ale</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/schweppesLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Scweppes Soda Water">
                                            <input type="hidden" name="drink_price" value="2">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Schweppes Soda Water</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/lucozadeLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Lucozade">
                                            <input type="hidden" name="drink_price" value="2.75">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Lucozade</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/redBullLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Red Bull">
                                            <input type="hidden" name="drink_price" value="2.75">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Red Bull</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2.75</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 lunch">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/cordialLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=2>
                                            <input type="hidden" name="drink_title" value="Cordials">
                                            <input type="hidden" name="drink_price" value="2">
                                            <input type="hidden" name="drink_desc" value="Non-Alcoholic">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Cordials</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€2</div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-4 col-sm-6 snacks ">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/pringlesOriginalLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=3>
                                            <input type="hidden" name="drink_title" value="Pringles Original">
                                            <input type="hidden" name="drink_price" value="1.10">
                                            <input type="hidden" name="drink_desc" value="Snacks">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pringles Original</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€1.10</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6 snacks">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/pringlesSourcreamLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=3>
                                            <input type="hidden" name="drink_title" value="Pringles Sourcream">
                                            <input type="hidden" name="drink_price" value="1.10">
                                            <input type="hidden" name="drink_desc" value="Snacks">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pringles Sourcream</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€1.10</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 snacks">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/pringlesSaltAndVinegarLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=3>
                                            <input type="hidden" name="drink_title" value="Pringles Salt & Vinegar">
                                            <input type="hidden" name="drink_price" value="1.10">
                                            <input type="hidden" name="drink_desc" value="Snacks">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pringles Salt & Vinegar</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€1.10</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 snacks">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/pringlesTexasBBQLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=3>
                                            <input type="hidden" name="drink_title" value="Pringles Texas BBQ">
                                            <input type="hidden" name="drink_price" value="1.10">
                                            <input type="hidden" name="drink_desc" value="Snacks">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Pringles Texas BBQ</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€1.10</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 snacks">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/kingCheeseAndOnionLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=3>
                                            <input type="hidden" name="drink_title" value="King Cheese & Onion">
                                            <input type="hidden" name="drink_price" value="1.10">
                                            <input type="hidden" name="drink_desc" value="Snacks">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>King Cheese & Onion</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€1.10</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 snacks">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/kingSaltAndVinegarLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=3>
                                            <input type="hidden" name="drink_title" value="King Salt & Vinegar">
                                            <input type="hidden" name="drink_price" value="1.10">
                                            <input type="hidden" name="drink_desc" value="Snacks">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>King Salt & Vinegar</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€1.10</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 snacks">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/kpPeanutsLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=3>
                                            <input type="hidden" name="drink_title" value="Peanuts">
                                            <input type="hidden" name="drink_price" value="1.10">
                                            <input type="hidden" name="drink_desc" value="Snacks">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Peanuts</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€1.10</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 snacks">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/scampiLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=3>
                                            <input type="hidden" name="drink_title" value="Scampi Fries">
                                            <input type="hidden" name="drink_price" value="1.10">
                                            <input type="hidden" name="drink_desc" value="Snacks">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Scampi</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€1.10</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 snacks">
                            <div class="feature_item">
                                <div class="feature_item_inner">
                                    <img src="img/menu-grid/baconFriesLogo.jpg" alt="">
                                    <div class="icon_hover">
                                        <form action="testcart.php" method="post">
                                            <input type="hidden" name="drink_cat" value=3>
                                            <input type="hidden" name="drink_title" value="Bacon Fries">
                                            <input type="hidden" name="drink_price" value="1.10">
                                            <input type="hidden" name="drink_desc" value="Snacks">
                                            <input type="hidden" name="a_perc" value=""> 
                                            <input type="submit" class="btn fa fa-shooping-cart" value="&#xf07a; ">
                                        </form>
                                    </div>
                                </div>
                                <div class="title_text">
                                    <div class="feature_left"><a href="#"><span>Bacon Fries</span></a></div>
                                    <div class="restaurant_feature_dots"></div>
                                    <div class="feature_right">€1.10</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
            <?php
            function php_func()
            {
            $sql = "INSERT INTO cart (drink_cat, drink_title, drink_price, drink_desc, a_perc)
                VALUES ('3', 'Heinken', '5.30', 'Alcoholic', '4.3%')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
            }  
?>     

         
        
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
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.google.ie"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget contact_widget">
                                <div class="f_w_title">
                                    <h4>CONTACT US</h4>
                                </div>
                                <p>Have questions, comments or just want to say hello:</p>
                                <ul>
                                    <li><a href="https://www.google.com/gmail/"><i class="fa fa-envelope"></i>backpiper.com@gmail.com</a></li>
                                    <li><a href="https://www.google.com/search?q=how+to+call+people&rlz=1C1CHBF_enIE822IE822&oq=how+to+call+people&aqs=chrome..69i57.2343j1j9&sourceid=chrome&ie=UTF-8"><i class="fa fa-phone"></i>+88 01911 854 378</a></li>
                                    <li><a href="https://maps.google.com/"><i class="fa fa-map-marker"></i>Mayor Street Lower, International Financial Services Centre,<br /> Dublin, DB 91106</a></li>
                                </ul>
                            </aside>
                        </div>
                    
                        
                    </div>
                </div>
            </div>
            <div class="copy_right_area">
                <div class="container">
                    <div class="pull-left">
                        
                    </div>
                    <div class="pull-right">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="home.php">Home</a></li>
                            <li><a href="menu-grid.php">Menu</a></li>
                            <li><a href="gallery.php">Help</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
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

//drink commenrentwentnie