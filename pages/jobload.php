<div style="background-color: #f9f9f9; padding: 4%; border-bottom: 1px solid #c3c3c3;">
            <h4 class="text-left">My Job Feed</h4>
          </div>
<?php
include 'config.php';
$q=$_GET["q"];
 
$conn = OpenCon();

	if ($q=='all')
	{
	$sql = "SELECT  * FROM job where job_status ='1'";
	}
	else
	{
	$sql = "SELECT  * FROM job where catagory =  '$q' and job_status ='1'";
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
        <span style='margin-bottom:0px; float:right;'> "  . $row["job_duration"]. "days</span> </p></div></div> ";
        $count_u++;
          echo "<br>";
          echo "<hr>";
    }
} else {
    echo "<h2 class='text-center'>No Job Avaiable</h2>";
}
 
CloseCon($conn);
 
?>

