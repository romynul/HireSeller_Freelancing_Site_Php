<?php 
session_start();
$user = '';
if(isset($_SESSION['loggedUser']))
{
    if($_SESSION['loggedUserType'] == "client")
    {
        $user = $_SESSION['loggedUser'];
    }else header('location:dashboard.php');
}else header('location:login.php');
//check if submit
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include("config.php");
    $conn = OpenCon();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $title = $_POST['jobtitle'];
    $duration = $_POST['duration'];
    $rate = $_POST['rate'];
    $description = $_POST['description'];
    $cata = $_POST['catagory'];
    $date = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO job (job_title, job_duration, job_rate, job_description, job_postedby, job_date, catagory,job_status) VALUES ('$title', '$duration', '$rate', '$description', '$user', '$date', '$cata','1')";
    
    if ($conn->query($sql) === TRUE) {
       echo "<script>
        window.location.href='dashboard.php';
        alert('Job Posted Succesfully');
</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}

?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logo Nav - Start Bootstrap Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="../resources/icon.png" />

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
                    document.getElementById("alljob").style.border="0 1px 6px rgba(57,73,76,0.35)";
                }
            }
            xmlhttp.open("GET","jobload.php?q="+str,true);
            xmlhttp.send();
        }

        function showjob(str) {
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
                    document.getElementById("alljob").style.border="0 1px 6px rgba(57,73,76,0.35)";
                }
            }
            xmlhttp.open("POST","showjob.php?q="+str,true);
            xmlhttp.send();
        }

        function showpjob(str) {
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
                    document.getElementById("alljob").style.border="0 1px 6px rgba(57,73,76,0.35)";
                }
            }
            xmlhttp.open("GET","profile_job.php?q="+str,true);
            xmlhttp.send();
        }

        function showcjob(str) {
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
                    document.getElementById("alljob").style.border="0 1px 6px rgba(57,73,76,0.35)";
                }
            }
            xmlhttp.open("GET","client_job.php?q="+str,true);
            xmlhttp.send();
        }

        
    </script>
    <style type="text/css">
      p {
    margin-top: 0;
    margin-bottom: 0.4rem;
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
              <a class="nav-link rs_menu" href="message.php">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link rs_menu" href="logout.php">Log Out</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

<div style="margin-top: 2.3%;" class="container-fluid main_content">
  <div class="container">
    <div class="row">
    </div>
  </div>
</div>

<div class="container-fluid main_content">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-lg-2 ">
              <h3 class="text-left text-success">Choose Catagory</h3>
              
              <a href="#" id="job" onclick="showResult('all')"><p>All Jobs</p></a>
              <a href="#" id="web" onclick="showResult('web')"><p>Web Design</p></a>
              <a href="#" id="graphics" onclick="showResult('graphics')"><p>Graphics Design</p></a>
              <a href="#" id="content" onclick="showResult('content')"><p>Content Writing</p></a>
              <a href="#" id="marketing" onclick="showResult('marketing')"><p>Digital Marketing</p></a>
              <a href="#" id="seo" onclick="showResult('seo')"><p>SEO</p></a>
              <a href="#" id="mobile" onclick="showResult('mobile')"><p>Mobile Development</p></a>
              <a href="#" id="desktop" onclick="showResult('desktop')"><p>Desktop Apps</p></a>
            </div>
            <div id="job" class="col-md-7 col-lg-7 col-sm-12 col-12 job_view">
                <?php include 'freelancer.php';?>
                <div id="alljob">
          <div style="background-color: #f9f9f9; padding: 4%; border-bottom: 1px solid #c3c3c3;">

            <h4 class="text-left">Post Your Job</h4>
          </div>

          <div>
            <div style='background-color: #f9f9f9; padding: 4%; border-bottom: 1px solid #c3c3c3;'>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" id="jobpostform">
             <span>Job Title Here</span>
            <input type="text" name="jobtitle" class="form-control" placeholder="jobtitle"> <br>
            <span>Max Duration</span>
            <input type="text" name="duration" class="form-control" placeholder="duration"> <br>
            <span>Budget</span>
            <input type="text" name="rate" class="form-control" placeholder="rate"> <br>
            <span>Description</span>
            <textarea rows="4" cols="50" name="description" class="form-control" form="jobpostform"></textarea> <br>
            <span>Add Documents</span><br>
            <input type="file" name="attachments"><br>
            <br>
            <span>Choose Catagory</span><br>
            <select class="form-control" name="catagory">
            <option value="all">Don't Know</option>
            <option value="web">Web Development</option>
            <option value="graphics">Graphics Design</option>
            <option value="content">Content Writing</option>
            <option value="digital">Digital Marketing</option>
            <option value="seo">SEO</option>
            <option value="mobile">Mobile Development</option>
            <option value="desktop">Desktop Apps</option>
            </select><br>
            <input type="submit" class="btn btn-success" value="Add Job">
        </form>
            </div>
    </div>
   
                </div>
            </div>
            <div class="col-md-3 col-lg-3 rs_profile_show">
                
               <?php
               include ("config.php");
 
$conn = OpenCon();


$sql = "SELECT  name, dob, skill, rate, dp,balance, country FROM freelancer where username='$user'";
//Added

$total_tranc = "SELECT SUM(bid_amount) as total FROM bid WHERE (bid_by = '$user' or job_by = '$user') and bid_status = '4'";

$total_job = "SELECT count(*) as totaljob FROM bid WHERE (bid_by = '$user' or job_by = '$user') and bid_status = '4'";


//added
$result = $conn->query($sql);
$result2 = $conn->query($total_tranc);
$result3 = $conn->query($total_job);
$summ= $result2->fetch_assoc();
$row1=$result3->fetch_assoc();
$totalj=$row1['totaljob'];
$sum=$summ['total'];
$count_u = 0;


if ($result->num_rows > 0) {
   
    while(($row = $result->fetch_assoc()) ) {
        echo "
        <div class='rs_profile'><h2>My Profile</h2><hr>" . '<img class="dp_photo" src="data:image/jpeg;base64,'.base64_encode( $row['dp'] ).'" height="150px;" width="150px;"/>'."<br><h4 class='text-center'>". $row["name"]. "</h4><p class='text-center'>". $row["skill"]." </p> <hr><span> Rate <span style='float:right;'>$" . $row["rate"]. "/hr</span></span>  <p style='margin-bottom:0px;'>DOB :  <span style='float:right;'>" . $row["dob"]."</span>  </p><p style='margin-bottom:0px;'>Country : <span style='float:right;'>" . $row["country"]."</span>
        <p>Job Done : <span style='float:right;'>"  . $totalj. "</span></p><p>Balance : <span style='float:right;'>$"  . $row["balance"]. "</span></p><p>Total Transaction : <span style='float:right;'>$"  .$sum. "</span></p> </p>
        </div> ";
        $count_u++;
          echo "<br>";
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
