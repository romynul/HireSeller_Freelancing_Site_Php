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
	<script src="../js/validation.js"> </script>
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
              <a class="nav-link rs_menu" href="login.php">Log In</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>


<?php

include("config.php");


?>

<div style="margin-top: 4%;" class="container-fluid">
	<div class="container">
  <div class="alert alert-danger" id="showErr" style="display:none">
  
  </div>
		<div class="row">
			<div class="col-md-2 col-lg-2"></div>
			<div id="job" class="col-md-8 col-lg-8 col-sm-12 col-12">
        <form name="client_registration_form" method="POST" onsubmit="return submitt()" action="add.php" >
				<h1 class="text-center text-success">Registartion</h1>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="text" name="first_name" id="first_name" class="form-control" value="" placeholder="First Name *">
          
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="text" name="last_name" id="last_name" class="form-control" value="" placeholder="Last Name *">
          
          </div>
          
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="text" name="user_name" onkeyup="userCheck(this.value)" id="user_name" class="form-control" value="" placeholder="User Name *">
          </div>

          <div id="usernameChecker" style="display: none;" class="col-lg-6 col-md-6 col-sm-6 col-12">
           
           </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="text" name="email" id="email" onkeyup="emailCheck(this.value)" class="form-control"  value="" placeholder="Enter You Email *">
          
          </div>
          
          <div id="emailChecker" style="display: none;" class="col-lg-6 col-md-6 col-sm-6 col-12">
           
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="text" name="confirm_email" id="confirm_email" class="form-control"  value="" placeholder="Confirm Email *">
          
          </div>
          <div  class="col-lg-6 col-md-6 col-sm-6 col-12">
           <select class="form-control" name="role">
            <option value="freelancer">Freelancer</option>
            <option value="client">Client</option>
            </select>
           </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="text" name="phone" id="phone" class="form-control"  value="" placeholder="Phone *">
          
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="Date" name="dob" id="dob" class="form-control"  value="" placeholder="Date Of Birth *">
          
          </div>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <input type="text" name="address" id="address" class="form-control"  value="" placeholder="Address *">
          
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="text" name="state" id="state" class="form-control"  value="" placeholder="State *">
          
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="text" name="country" id="country" class="form-control"  value="" placeholder="Country *">
          
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="text" name="zip_code" id="zip_code" class="form-control"  value="" placeholder="Zip Code *">
          
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="text" name="nid" id="nid" class="form-control"  value="" placeholder="NID *">
          
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="password" name="password" id="password" class="form-control"  value="" placeholder="Password *">
          
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="password" name="confirm_password" id="confirm_password" class="form-control"  value="" placeholder="Confrim Password *">
          
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <input type="submit" class="btn btn-success" name="submit" value="Register">
          </div>
        </div>
      </form>
    </div>

				
			<div class="col-md-2 col-lg-2">

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
