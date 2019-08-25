<?php
session_start();
$user = '';
$type = $sql='';
if(isset($_SESSION['loggedUser']))
{
    $user = $_SESSION['loggedUser'];
}else header('location:index.php');

include('confiqa.php');
if($_SESSION['loggedUserType'] == "client")
    {
        $type = 1;
    }else $type = 2;

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo $user;

if($type == 1)
{
    $sql = "SELECT DISTINCT send_to FROM message WHERE send_by = '$user';";
}
else if($type== 2)
{
    $sql = "SELECT DISTINCT send_by FROM message WHERE send_to = '$user';";
}

$rs = mysqli_query($conn,$sql);

$conn->close();

?>


<!DOCTYPE html>
<html>
<head>
    <title>Messages</title> 
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

</head>
<body>
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


<div class="container-fluid main_content" style="margin-top: 2%;">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-lg-2 " style="padding-top: 2%;">
              <h3 class="text-left">Click On user to Send Messages</h3>
              
              
            </div>
            <div id="job" class="col-md-7 col-lg-7 col-sm-12 col-12 job_view">
                <div style="background-color: #f9f9f9; padding: 4%; border-bottom: 1px solid #c3c3c3;">
            <h4 class="text-left">Message User</h4>
          </div>
                <?php

        if($type == 1)
        {
            $i=0;
            foreach($rs as $row)
            {
                echo "<div class='mess' onclick='document.getElementById($i).submit();'>";

                echo "<form id='$i' action='showMessage.php' method='POST'>";
                echo $row['send_to'];
                echo "<input type='hidden' name='partner' value='".$row['send_to']."'>";
                echo "</form>";
                echo "</div>";
                $i++;
                
            }

            
        }
        else{
            $i=0;
            foreach($rs as $row)
            {
                echo "<div  class='mess' onclick='document.getElementById($i).submit();'>";

                echo "<form id='$i' action='showMessage.php' method='POST'>";
                echo $row['send_by'];
                echo "<input type='hidden' name='partner' value='".$row['send_by']."'>";
                echo "</form>";
                echo "</div>";
                $i++;
                //echo "<hr>";
            }
        }

        
       
    ?>

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
    
</body>
</html>