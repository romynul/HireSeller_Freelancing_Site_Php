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

    <title>HireSeller - Find Your Job & Get Work Done</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/hs_style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="resources/icon.png" />


  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="resources/logo_light.png" width="160" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link rs_menu" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link rs_menu" href="pages/jobs.php">Browse Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link rs_menu" href="pages/dashboard.php">DashBoard</a>
            </li>
            
            <?php  
            if(isset($_SESSION['loggedUser']))
              {
               echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='pages/logout.php'>Logout</a></li>";
              }

              else
              {
                echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='pages/registration.php'>Become Freelnacer</a></li>";
                echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='pages/login.php'>Login</a></li>";


              }
              ?>
            
              
            
          </ul>
        </div>
      </div>
    </nav>

 <div class="container-fluid rs_slider">

      <h1 class="text-white">Become Freelancer</h1>
      <p class="text-white">Build Up Your Carrier</p>
</div>

   <div class="container-fluid bg-success">
      <div class="container rs_call">
      <div class="row">
      <div class="col-lg-10 col-md-8 col-sm-8">
         <h1 class="text-white">Get Your Job Done</h1>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-4 center-block">
         <a href="pages/postjob.php" class="btn btn-light btn-lg active" role="button" aria-pressed="true">Post Job</a>
         
      </div>
</div>
</div>
</div>
      
    <!-- Page Content -->
    <div class="container" style="padding: 4% 0% 8% 0%">
      <h1 class="text-center text-success">About Us</h1>
      <hr class="rs_hr" color=green>
      <p class="text-center">We are trusted and commited to give best services. Equal Priority for Freelancer and Buyer.HreSeller is the world's largest freelance services marketplace for lean entrepreneurs to focus on growth & create a successful business at affordable costs. We'll Find You The Perfect Freelancers For Your Projects! It's Easy & Affordable. Secure Payments. Increased Productivity. 90% of Customers Rehire.
         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
      </p>

    </div>

    <div class="container">
       
    </div>

    <div class="container-fluid bg-success">
       
       <div class="container" style="padding: 5% 0% 8% 0%;">
         <h1 class="text-center text-white">How It Works</h1>
         <hr class="rs_hr" color=white>
         <div class="row">
         <div class="col-lg-2 col-md-6 col-6">
            <p class="text-left text-white">Post Your Job</p>
            <img style="width: 60%" src="resources/arrow.png">
         </div>
         <div class="col-lg-2 rs_step col-md-6 col-6">
            <img style="width: 60%" src="resources/post.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <p class="text-left text-white">Choose Seller</p>
            <img style="width: 60%" src="resources/arrow.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <img style="width: 60%" src="resources/hire.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <p class="text-left text-white">Get Work Done</p>
            <img style="width: 60%" src="resources/arrow.png">
         </div>
         <div class="col-lg-2 col-md-6 col-6">
            <img style="width: 60%" src="resources/done.png">
         </div>
         </div>

    </div>
    </div>


    <div class="container-fluid">   
       <div class="container" style="padding: 5% 0% 8% 0%;">

          <h1 class="text-center text-success">Find Your Catagory</h1>
         <hr class="rs_hr" color=green>

            <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/web.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Web Development</p>
               </div>
               </a>
            </div>  

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/mobile.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Mobile Development</p>
               </div>
               </a>
            </div>  

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/graphics.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Graphics Design</p>
               </div>
               </a>
            </div>  

            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1 pb-md-1">

               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/writer.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Content Writer</p>
               </div>
               </a>
            </div>   

            
       </div>

       <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/seo.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Search Engine Optimization</p>
               </div>
               </a>
            </div>  

             <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/care.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Customer Care</p>
               </div>
               </a>
            </div>  
             <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/marketing.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Digital Marketing</p>
               </div>
               </a>
            </div>  
             <div class="col-lg-3 col-md-4 col-sm-6 col-12 pr-md-1">
               <a href="pages/dashboard.php">
               <div class="rs_browse_job">
               <img src="resources/assistant.png" width="40%" class="rounded mx-auto d-block" alt="Web">
               <p class="text-center">Web Assistant</p>
               </div>
               </a>
            </div>  
     
            
       </div>
    </div>
 </div>

<div class='container-fluid bg-success'>   
       <div class='container' style='padding: 5% 0% 8% 0%;'>

          <h1 class='text-center text-white'>Top Rated Freelancer</h1>
         <hr class='rs_hr' color=white>
            <div class='row'>


<?php
include 'pages/config.php';
 
$conn = OpenCon();


$sql = "SELECT  name, jobdone, skill, rate, country FROM freelancer";
$result = $conn->query($sql);
$count_u = 0;

if ($result->num_rows > 0) {
   
    while(($row = $result->fetch_assoc()) && ($count_u<6)) {
        echo "
        <div class='col-lg-6 col-md-6 col-sm-6 col-12 pr-md-1 pb-md-1'><div style='padding:10px;' class='rs_user text-white'><h2>" . $row["name"]. " <span style='float:right;'>$" . $row["rate"]. "/hr</span> </h2>  <p style='margin-bottom:0px;'>Skill :  " . $row["skill"]."</p><p style='margin-bottom:0px;'>Country :" . $row["country"]."
        <span style='margin-bottom:0px; float:right;'>Job Done : "  . $row["jobdone"]. "</span> </p></div></div> ";
        $count_u++;
          echo "<br>";
    }
} else {
    echo "0 results";
}
 
CloseCon($conn);
 
?>

</div></div></div>


<div class="container-fluid">   
       <div class="container text-center" style="padding: 5% 0% 8% 0%;">

          <h1 class="text-center text-success">Customer Feedback</h1>
         <hr class="rs_hr" color=green>
         <q style="font-size: 22px; font-weight: bold;">I’ve been working with them for a few years. Fine tuning and tweaking my website to make sure that I have the edge on my competitors. All I can say is Fast,Reliable,and Patiently Understanding. Thanks A million</q><br><br>
         <p>Justin Skinner</p>
       </div>
 </div>


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
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>


  </body>

</html>
