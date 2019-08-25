<?php 
session_start();
$user = '';
$userType='';
$rs = false;
$title = $duration = $rate = $description = $date = $job_by = $jobid =  '';
if(isset($_SESSION['loggedUser']))
{
    $userType=$_SESSION['loggedUserType'] ;
}
//$userType = 1;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include('config.php');
    $conn = OpenCon();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $jobid =$_GET["q"];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "SELECT * FROM job WHERE job_id = '$jobid'";

    $rs = mysqli_query($conn,$sql);

    if($rs)
        {
            foreach($rs as $row)
            {
                $jobid = $row['job_id'];
                $title = $row['job_title'];
                $duration = $row['job_duration'];
                $rate = $row['job_rate'];
                $description = $row['job_description'];
                $date = $row['job_date'];
                $job_by = $row['job_postedby'];
            }
        }
    //var_dump($rs);
    //echo $user;
    
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
</head>
<body>

        <div style="background-color: #f9f9f9; padding: 4%; border-bottom: 1px solid #c3c3c3;">
            <span class="text-left" style="line-height: 27px; font-size: 21px; font-weight: 400;"> <?php echo $title?></span>
          </div>

          <div style=" padding: 2%;">
      <span> Posted by: <?php echo $job_by ?>   || <span style="color:blue;">Time: <?php echo $date?></span></span>
      <hr>
      <!--<div class="fakeimg" style="height:200px;">Image</div>-->
      <h5>Description:</h5>
      <p> <?php echo $description ?> </p>
      <br>
      <br>
      <p>Budget: $<?php echo $rate ?></p>
      <p>Duration: <?php echo $duration ?> days</p></div>
      
      <br>
      <?php 

        if($userType == "freelancer")
        {
            $users= $_SESSION['loggedUser'];

            
            $sql="SELECT * FROM bid WHERE job_id= '$jobid' and job_by = '$job_by' and bid_by = '$users'";

            $result = mysqli_query($conn, $sql);
            $row = $result->fetch_assoc();


            if (mysqli_num_rows($result)==1)
            {
               
                echo "<div style='background-color: #28a745; padding: 4%; border-bottom: 1px solid #c3c3c3;'>
            <span class='text-left text-white' style='line-height: 27px; font-size: 21px; font-weight: 400;'>You Already applied to this job </span>
          </div>";
               
            }
            else
            {
                echo "<div>
                <div style='background-color: #28a745; padding: 4%; border-bottom: 1px solid #c3c3c3;'>
            <span class='text-left text-white' style='line-height: 27px; font-size: 21px; font-weight: 400;'>Submit A Proposal</span>
          </div>
          <div style='background-color: #f9f9f9; padding: 4%; border-bottom: 1px solid #c3c3c3;'>
             <form action='addToBid.php' method='POST'>
                <span>Write a Short Cover Letter within 500 words</span>
                <textarea class='form-control' rows='5' name='Cover' id='comment'></textarea><br>
                <span>Your Bidding Amount</span>
                <input type='text' class='form-control' name='amount' placeholder='Amount'>
                <span style='font-size:12px; color: green;'>Notice: 10% will Reduct As Charge</span>
                <br>

                <span>Required Time To Complete</span>
                <input type='text' class='form-control' name='duration' placeholder='duration'><br>
                
                <input type='hidden' name='jobby' value=".$job_by. ">
                <input type='hidden' name='jobid' value=".$jobid. ">
                <input class='btn btn-success'type='submit' value='Submit'>
            </form>
      </div></div>" ;
            }
            mysqli_close($conn);

              
        }
      ?>
      
  <script>
    </script>
    
</body>
</html>