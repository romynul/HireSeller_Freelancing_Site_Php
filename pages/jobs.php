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

    <script>
        function showResult(str) {
            if (str.length==0) {
                document.getElementById("alljob").innerHTML="";
                document.getElementById("alljob").style.border="0px";
                return;
            }
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
            } else {  // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                    document.getElementById("alljob").innerHTML=this.responseText;
                    document.getElementById("alljob").style.border="1px solid #A5ACB2";
                }
            }
            xmlhttp.open("GET","jobload.php?q="+str,true);
            xmlhttp.send();
        }
    </script>
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

            <?php  
            if(isset($_SESSION['loggedUser']))
              {
                echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='message.php'>Messages</a></li>";
               echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='logout.php'>Logout</a></li>";
              }

              else
              {
                echo "<li class='nav-item'>";
                echo "<a class='nav-link rs_menu' href='login.php'>Login</a></li>";


              }
              ?>
            
          </ul>
        </div>
      </div>
    </nav>


<div style="margin-top: 4%;" class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-lg-3 ">
			  <h1 class="text-left text-success">Choose Catagory</h1>
			  
			  <a href="#" id="jobs" onclick="showResult('all')"><p>All Jobs</p></a>
			  <a href="#" id="web" onclick="showResult('web')"><p>Web Design</p></a>
			  <a href="#" id="graphics" onclick="showResult('graphics')"><p>Graphics Design</p></a>
			  <a href="#" id="content" onclick="showResult('content')"><p>Content Writing</p></a>
			  <a href="#" id="marketing" onclick="showResult('marketing')"><p>Digital Marketing</p></a>
			  <a href="#" id="seo" onclick="showResult('seo')"><p>SEO</p></a>
			  <a href="#" id="mobile" onclick="showResult('mobile')"><p>Mobile Development</p></a>
			  <a href="#" id="desktop" onclick="showResult('desktop')"><p>Desktop Apps</p></a>
			</div>
			<div id="job" class="col-md-9 col-lg-9 col-sm-12 col-12">
				<div id="alljob">

					<div style="background-color: #f9f9f9; padding: 4%; border-bottom: 1px solid #c3c3c3;">
            <h4 class="text-left">My Job Feed</h4>
          </div>
          <?php
include 'config.php';
 
$conn = OpenCon();

  
  $sql = "SELECT  * FROM job";
$result = $conn->query($sql);
$count_u = 0;

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "
         <div class='col-lg-12 col-md-12 col-sm12 col-12 pr-md-1 pb-md-1'><div class='rs_browse_job' style='padding:2%;'><h3><a href='#' id='jobs' onclick='showjob(".$row['job_id'].")'>" . $row["job_title"]. "</a> <span style='float:right;'>$" . $row["job_rate"]. "</span> </h3>  <p style='margin-bottom:0px;'>Description :  " . $row["job_description"]."</p><p style='margin-bottom:0px;'>Posted by :" . $row["job_postedby"]."
        <span style='margin-bottom:0px; float:right;'> "  . $row["job_duration"]. "days</span> </p></div></div> ";
        echo "<input type='hidden' name='jobid' value='".$row['job_id']."'>";
        $count_u++;
          echo "<br>";
          echo "<hr>";
    }
} else {
    echo "0 results";
}
 
CloseCon($conn);
 
?>
				</div>
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
    



  </body>

</html>
