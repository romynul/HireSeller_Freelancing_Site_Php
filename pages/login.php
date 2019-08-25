<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logo Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/hs_style.css" rel="stylesheet">

      <style type="text/css">
      input {
            margin-bottom: 15px;
            }
    </style>
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../index.php">
          <img src="../resources/logo_light.png" width="160" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link rs_menu" href="../index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link rs_menu" href="registration.php">New User</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>


<div style="margin-top: 4%;" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-lg-2"></div>
			  
			<div id="job" class="col-md-6 col-lg-6 col-sm-12 col-12">
        <form name="client_registration_form" method="post" action="login_confirm.php">
				<h1 class="text-center text-success">Login Here</h1>
        <div class="row">
          
          
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <input type="text" name="user_name" class="form-control" placeholder="User Name">
          
          </div>

         
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <input type="submit" class="btn btn-success" name="submit" value="Login"><br>
            <a href="registration.php">New User Click Here</a>
          </div>
        </div>
      </form>
    </div>

				
			<div class="col-md-3 col-lg-3">

			</div>
		</div>
	</div>
</div>

 <div class="container-fluid">

    <div class="row">
    	<div class="col-lg-8 col-md-8 col-sm-12 col-12"></div>
    	<div class="col-lg-2 col-md-2 col-sm-12 col-12">
    		

    	</div>
    </div>
</div>
   
















    <!-- Page Content -->
   <div class="container-fluid bg-dark">   
       <div class="container text-white" style="padding: 5% 0% 8% 0%;">
       	<div class="row">
       		<div class="col-lg-3 col-md-3 col-sm-6 col-12 rs_foot">
       			<h2>HireSeller</h2>			
       			<hr width="100%" color=white>
       			<p>
       				Stay On Your Track <br>
       				Reach Your Goal and <br>
       				Become Succesful In <br>
       				Your Track and Claim<br>
       				Become Succesful In <br>
       			</p>
       		</div>
       		<div class="col-lg-3 col-md-3 col-sm-6 col-12 rs_foot">
       			<h2>HireSeller</h2>
       			<hr width="100%" color=white>
       			<p>
       				Stay On Your Track <br>
       				Reach Your Goal and <br>
       				Become Succesful In <br>
       				Your Track and Claim<br>
       				Become Succesful In <br>
       			</p>
       		</div>
       		<div class="col-lg-3 col-md-3 col-sm-6 col-12 rs_foot">
       			<h2>Address</h2>		
       			<hr width="100%" color=white>
       			<p>
       				AIUB Permanent Campus<br>
       				k/160, Kuril, Vatara<br>
       				Dhaka-1229<br>
       				Bangladesh<br>
       				01700000000
       			</p>
       		</div>
       		<div class="col-lg-3 col-md-3 col-sm-6 col-12">
       			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14600.265022759153!2d90.41790391977541!3d23.816242900000013!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c711d13bbec7%3A0xc47f7c3e8e2263f2!2sAmerican+International+University-Bangladesh!5e0!3m2!1sen!2sbd!4v1543597376859" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
       		</div>

       	</div>
       		<br>
       	<p style="text-align: center;" class="text-white">© 2015 - 2018 HireSeller® Global Inc.</p>
       </div>
 </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
    
   <script type="text/javascript">
    	$(document).ready(function(){
  $("#jobs").click(function(){
    $("#alljob").load('jobload.php');
  });

  $("#web").click(function(){
    $("#alljob").load('web.php');
  });
});	
    </script>


  </body>

</html>
