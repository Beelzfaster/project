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
        <title>Wait App</title>

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
        <link rel="stylesheet" href="style.css" / >	


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
        <section>
                <!--================Banner Area =================-->
                <br><br><br><br><br>
        <!--================End Banner Area =================-->
        <style>
h1 {
  text-align: center;
  color: orange;
  text-shadow: 2px 2px 4px #000000;

}
h2 {
  text-align: center;
}
</style>

            <br><br>
            <h3>
            <table class="table" >
            <tr>
            <th> Main </th>
            <th> Size </th>
            <th> Extra 1 </th>
            <th> Extra 2 </th>
            <th> Extra 3 </th>
            <th> Sauce 1 </th>
            <th> Sauce 2 </th>
            <th> Table</th>
            <th> Delete</th>
            </tr> 
            
            
            <?php
            
                $dbServername = "localhost";
                $dbUsername = "root";
                $dbPassword = "";
                $dbName = "menu";
                
                // Create connection
                
                $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

                $ordernum = $_SESSION['ordernum'];
                $tablevar = "kitchenmainmenu";
                
                
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "SELECT id, firstitem, size, firstextra, secondextra, thirdextra, firstsauce, secondsauce, ordernum FROM $tablevar ORDER BY id";
                $result = mysqli_query($conn, $sql);
                
                $_SESSION["total_price".$_SESSION['ordernum']] = 0;
                
                while($tablevar = mysqli_fetch_assoc($result)) {
                    $id = $tablevar['id'];
                    echo "<tr>"; 
                    echo "<td>".$tablevar['firstitem']."</td>";
                    echo "<td>".$tablevar['size']."</td>";
                    echo "<td>".$tablevar['firstextra']."</td>";
                    echo "<td>".$tablevar['secondextra']."</td>";
                    echo "<td>".$tablevar['thirdextra']."</td>";
                    echo "<td>".$tablevar['firstsauce']."</td>";
                    echo "<td>".$tablevar['secondsauce']."</td>";
                    echo "<td>".$tablevar['ordernum']."</td>";?>
                    <td>
                    <form action="delete/removekitchenmain.php" method="post">
                    <input type="hidden" name="ordernum" value="<?php echo htmlspecialchars($_SESSION['ordernum']); ?>">
                    <input type="hidden" name="id"  value='<?php echo "$id";?>'/>
                    <input type="submit" class="btn fa fa-trash-o" value="&#xf014;"></form></td>
                
                    <?php
                    
                
                }// end while loop
                
            ?>
            <tr>
                <th> Sidename </th>
                <th> Ingredient 1 </th>
                <th> Ingredient 2 </th>
                <th> Ingredient 3 </th>
                <th>  </th>
                <th>  </th>
                <th>  </th>
                <th> Table </th>
                <th>  Delete </th>
            </tr> 
            

            <?php
            
                $dbServername = "localhost";
                $dbUsername = "root";
                $dbPassword = "";
                $dbName = "menu";
                
                // Create connection
                
                $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

                $ordernum = $_SESSION['ordernum'];
                $sidetablevar = "kitchensidemenu";
                
                
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "SELECT id, sidename, ingredient1, ingredient2, ingredient3, ordernum FROM $sidetablevar ORDER BY id";
                $result = mysqli_query($conn, $sql);

                while($sidetablevar = mysqli_fetch_assoc($result)) {
                    $id = $sidetablevar['id'];
                    echo "<tr>"; 
                    echo "<td>".$sidetablevar['sidename']."</td>";
                    echo "<td>".$sidetablevar['ingredient1']."</td>";
                    echo "<td>".$sidetablevar['ingredient2']."</td>";
                    echo "<td>".$sidetablevar['ingredient3']."</td>";
                    echo "<td>"."</td>";
                    echo "<td>"."</td>";
                    echo "<td>"."</td>";
                    echo "<td>".$sidetablevar['ordernum']."</td>";?>
                    <td>
                    <form action="delete/removekitchenside.php" method="post">
                    <input type="hidden" name="ordernum" value="<?php echo htmlspecialchars($_SESSION['ordernum']); ?>">
                    <input type="hidden" name="id"  value='<?php echo "$id";?>'/>
                    <input type="submit" class="btn fa fa-trash-o" value="&#xf014;"></form></td>
                
                    <?php
                    
                
                }// end while loop

                

            ?>

            <tr>
                <th> Drinkname </th>
                <th>  </th>
                <th>  </th>
                <th>  </th>
                <th>  </th>
                <th>  </th>
                <th>  </th>
                <th> Table </th>
                <th>  Delete </th>
            </tr> 
            

            <?php
            
                $dbServername = "localhost";
                $dbUsername = "root";
                $dbPassword = "";
                $dbName = "menu";
                
                // Create connection
                
                $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

                $ordernum = $_SESSION['ordernum'];
                $drinktablevar = "kitchendrinkmenu";
                
                
                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $sql = "SELECT id, drinkname, ordernum FROM $drinktablevar ORDER BY id";
                $result = mysqli_query($conn, $sql);

                while($drinktablevar = mysqli_fetch_assoc($result)) {
                    $id = $drinktablevar['id'];
                    echo "<tr>"; 
                    echo "<td>".$drinktablevar['drinkname']."</td>";
                    echo "<td>"."</td>";
                    echo "<td>"."</td>";
                    echo "<td>"."</td>";
                    echo "<td>"."</td>";
                    echo "<td>"."</td>";
                    echo "<td>"."</td>";
                    echo "<td>".$drinktablevar['ordernum']."</td>";?>
                    <td>
                    <form action="delete/removekitchendrink.php" method="post">
                    <input type="hidden" name="ordernum" value="<?php echo htmlspecialchars($_SESSION['ordernum']); ?>">
                    <input type="hidden" name="id"  value='<?php echo "$id";?>'/>
                    <input type="submit" class="btn fa fa-trash-o" value="&#xf014;"></form></td>
                
                    <?php
                    
                
                }// end while loop

                

            ?>
            
            <style>
            .b1{
                background-color: #555555; 
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 25px;
            }
        </style>
            
        </table></h3>
        
       
        <br><br>
        
        
        <!--================End Footer Area =================-->
        
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