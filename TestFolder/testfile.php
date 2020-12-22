<!DOCTYPE html>
<html lang="en">
<head>
    <title>TEST PAGE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/form.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" / >	
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<header>
           <nav>
                  
                   <div class="nav-login">
                       <?php
                            if (isset($_SESSION['username'])) {
                              echo '<form action="includes/logout.inc.php" method="POST">
                                    <button type="submit" name="submit">Logout</button>
                                    </form>'; 
                            } else {
                              echo '<form action="includes/login.inc.php" method="POST">
                                    <input type="text" name="username" placeholder="Username/e-mail">
                                    <input type="password" name="password" placeholder="password">
                                    <button type="submit" name="submit">Login</button>
                                    </form>
                                    <a href="signup.php" class="button">Sign up</a>
                                    ';
                            }
                       
                       ?>
                      
                       
                   
               </div>
           </nav> 
            
        </header>
<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <!--form start-->
        <form class="form-container">
            <h1>Login</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-success btn-block">Submit</button>
        </form>
        <!--form end-->
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
    </div>
    </body>
</html?