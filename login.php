<?php
session_start();
$email='';
$password='';

$_SESSION['email']=$email;
$_SESSION['password']=$password;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  .btn {
    padding: 14px 24px;
    border: 0 none;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
}



  </style>

  <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Signin</title>
      <?php
      if(isset($_GET['msg']) && ($_GET['msg']=="failed")){
          ?>
          <script type='text/javascript'>alert("Login Failed: Invalid Username or Password!");</script>
          <?php
      }
      else if(isset($_GET['msg']) && ($_GET['msg']=="registered"))
      {
          ?>
      <script type='text/javascript'>alert("Successfully registered, Please login now!");</script>
          <?php
      }
      else if(isset($_GET['msg']) && ($_GET['msg']=='please_login'))
          {
          ?>
          <script type="text/javascript">alert("Please Login First to access your profile!");</script>
          <?php
      }
      ?>
	  <script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
  </head>

<nav class="navbar" id="insidenav">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="AJENCY_NAV.php">Short Movie</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="#">Login</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
    <span class="glyphicon glyphicon-user"></span> Sign Out <span class="caret"></span></a>
       
      </li>
      </ul>
  </div>
</nav>
  <body>
    <div class="container col-sm-5 pull-right">
        <form class="form-signin" action="#" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
             <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="email"><br>
             <label for="inputPassword" id="inputPassword" class="sr-only">Password</label>
                 <input type="password" value="" id="myInput"class="form-control" placeholder="Password" required name="password">
				<!--<div class="checkbox"> -->
			 <input type="checkbox" onclick="myFunction()">Show Password
			 
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				
               <a href="forget.php">Forgot Password ?</a><br><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				   </div>
                
			 
            
        </form>
    </div>

<div class="col-sm-10">
    <br> <br>
    <br>
   
</div>
<div class="container col-sm-10 pull-right" >

    <div class="row">
        <div class="askreg">
            <div class="col-lg-3">
                <br>
            </div>
        <div class="col-lg-3">
            <h2>Find Movies</h2>
            <p> Helps to find better Movies.
                Get connected with our Channel.
                Search Movies in just one click.
                
            </p>
            <p><a class="btn btn-info" href="#">Register Today<span class="glyphicon glyphicon-arrow-right"></span> </a></p>
        </div>
            </div>
        <div class="askreg">
        <div class="col-lg-4 ">
            <h2>Looking for a good Movie?</h2>
            <p> Find your Favourite Movie easily and quickly through our Search feature.
            </p>
            <p><a class="btn btn-info" href="#">Register into our Channel<span class="glyphicon glyphicon-arrow-right"></span> </a></p>
        </div>
        </div>
    </div>
</div>

  </body>

<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
<link href="css/sign.css" rel="stylesheet">
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</html>
