<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/express-favicon.png" type="image/x-icon" />
    
    <title>BeelzaBurger Sign up</title>
    </head>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" / >	
    <link href="css/bootstrap.min.css" rel="stylesheet">
     
<body>
 
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
        
    

<div class="container" id="reg">
    <h2>Login</h2>
</div>   
    
<form action="includes/login.inc.php" method="POST" id="sign">
       
    <div class="input-group">
    <label>Username</label>
    <input type="text" name="username" placeholder="username">
    </div>
        
    <div class="input-group">
    <label>Password</label>
    <input type="password" name="password" placeholder="password">
    </div>
  
    <div class="input-group">
    <button type="submit" name="submit" class="btn btn-block btn-lg">Login</button>
  </div>

</form>

</body>
</html>