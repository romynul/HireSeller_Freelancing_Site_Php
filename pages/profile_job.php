<div style="background-color: #f9f9f9; padding: 4%; border-bottom: 1px solid #c3c3c3;">
            <h4 class="text-left">My Job Feed</h4>
          </div>
<?php

session_start();
include 'config.php';
$q=$_GET["q"];
 $users= $_SESSION['loggedUser'];
$conn = OpenCon();

  if ($q=='all')
  {
  $sql = "SELECT  * FROM job";
  }
  else
  {
  $sql = "SELECT job.*, bid_status, bid_id FROM job,bid WHERE bid_by = '$users' and job.job_id=bid.job_id and bid.bid_status='$q'";
  }
$result = $conn->query($sql);
$count_u = 0;

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "
       <div class='col-lg-12 col-md-12 col-sm12 col-12 pr-md-1 pb-md-1'><div class='rs_browse_job' style='padding:2%;'><h3><a href='#' id='jobs' onclick='showjob(".$row['job_id'].")'>" . $row["job_title"]. " </a><span style='float:right;'>$" . $row["job_rate"]. "</span> </h3>  <p style='margin-bottom:0px;'>";

       $string = $row["job_description"];
if (strlen($string) > 200) {
$trimstring = substr($string, 0, 200). ' <a href="#" id="jobs" onclick="showjob('.$row["job_id"].')">Read More...</a>';
} else {
$trimstring = $string;
}


       echo "Description :  " . $trimstring."</p><p style='margin-bottom:0px;'>Posted by :" . $row["job_postedby"]."
        <span style='margin-bottom:0px; float:right;'> "  . $row["job_duration"]. "days</span> </p> ";

        if ($row["bid_status"]==2){

          echo "<form action='delivered.php' method='POST'>
          <span>Description</span>
            <textarea rows='4' cols='50' name='deliver_n' class='form-control' ></textarea> <br>
          <input type='hidden' name='bidid' value='".$row['bid_id']."'>
                <input class='btn btn-warning' type='submit' value='Deliver'></form><br> ";

          echo "<form action='cancelreq.php' method='POST'>
          <input type='hidden' name='bidid' value='".$row['bid_id']."'>
                <input class='btn btn-danger' type='submit' value='Cancel Order'></form> ";
              }

        $count_u++;
          echo "<br>";
          echo "<hr></div></div>";
    }
} else {
    echo "<h2 class='text-center'>No Job Avaiable</h2>";
}
 
CloseCon($conn);
 
?>

