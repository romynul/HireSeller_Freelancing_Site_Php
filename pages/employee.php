<?php
include 'config.php';
 
$conn = OpenCon();
$q=$_GET["q"];

		if($q=='1'){
			$sql = "SELECT  username, status,name, jobdone, skill, rate, country FROM freelancer where role ='freelancer'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "
        <div class='col-lg-12 col-md-12 col-sm-12 col-12 pr-md-1 pb-md-1'><div class='rs_user text-success'><h4>" . $row["name"]. " <span style='float:right;'>$" . $row["rate"]. "/hr</span> </h4>  <p style='margin-bottom:0px;'>Skill :  " . $row["skill"]."</p><p style='margin-bottom:0px;'>Country :" . $row["country"]."
        <span style='margin-bottom:0px; float:right;'>Job Done : "  . $row["jobdone"]. "</span> </p> ";
        if ($row["status"]=='1'){

          echo "<form action='banned.php' method='POST'><input type='hidden' name='username' value='".$row['username']."'>
          <input type='hidden' name='status' value='".$row["status"]."'>
                <input class='btn btn-warning' type='submit' value='Banned'></form> ";
              }
          else{

          echo "<form action='banned.php' method='POST'><input type='hidden' name='username' value='".$row['username']."'>
          <input type='hidden' name='status' value='".$row["status"]."'>
                <input class='btn btn-success' type='submit' value='Active'></form> ";
              }
          echo "<hr></div></div>";
    			}
				}
		  else {
    			echo "0 results";
			}
			}

		else if($q=='2'){
			$sql = "SELECT  username, status, name, jobdone, skill, rate, country FROM freelancer where role ='client'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "
        <div class='col-lg-12 col-md-12 col-sm-12 col-12 pr-md-1 pb-md-1'><div class='rs_user text-success'><h4>" . $row["name"]. " <span style='float:right;'>$" . $row["rate"]. "/hr</span> </h4>  <p style='margin-bottom:0px;'>Skill :  " . $row["skill"]."</p><p style='margin-bottom:0px;'>Country :" . $row["country"]."
        <span style='margin-bottom:0px; float:right;'>Job Done : "  . $row["jobdone"]. "</span> </p> ";
        if ($row["status"]=='1'){

          echo "<form action='banned.php' method='POST'><input type='hidden' name='username' value='".$row['username']."'>
          <input type='hidden' name='status' value='".$row["status"]."'>
                <input class='btn btn-warning' type='submit' value='Banned'></form> ";
              }
          else{

          echo "<form action='banned.php' method='POST'><input type='hidden' name='username' value='".$row['username']."'>
          <input type='hidden' name='status' value='".$row["status"]."'>
                <input class='btn btn-success' type='submit' value='Active'></form> ";
              }
          echo "<hr></div></div>";
    			}
				}
		  else {
    			echo "0 results";
				}
			}



			else if($q=='3'){
			$sql = "SELECT  * FROM job";
			$result = $conn->query($sql);

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
          echo "<br>";
          if($row["job_status"]=='1')
          {
          	echo "Status : <span style='color: grey;'>Not Bidded</span>";
          }
          elseif($row["job_status"]=='2')
          {
          	echo "Status : <span style='color: yellow;'>Active</span>";
          }

          elseif($row["job_status"]=='3')
          {
          	echo "Status : <span style='color: blue;'>Delivered</span>";
          }
          elseif($row["job_status"]=='4')
          {
          	echo "Status : <span style='color: green;'>Completed</span>";
          }

          else
          {
          	echo "Status : <span style='color: red;'>Cancelled</span>";
          }
          echo "<hr></div></div>";
    }
} else {
    echo "<h2 class='text-center'>No Job Avaiable</h2>";
}
			}


			else if($q=='4'){
			$sql = "SELECT  * FROM job where job_status='6'";
			$result = $conn->query($sql);

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
          echo "<br>";
         echo"Request For Cancel";

         $job=$row['job_id'];
         $sql = "SELECT  * FROM bid where job_id='$job'";
			$result = $conn->query($sql);

	if ($result->num_rows > 0) {
   
    	while($row = $result->fetch_assoc()) {

    	echo "<form action='cancel.php' method='POST'>
          <input type='hidden' name='bidid' value='".$row['bid_id']."'>
                <input class='btn btn-danger' type='submit' value='Cancel'></form> <br>";

         echo "<form action='activeagain.php' method='POST'>
          <input type='hidden' name='bidid' value='".$row['bid_id']."'>
                <input class='btn btn-success' type='submit' value='Active Again'></form> ";

    			}
			}
         

          echo "<hr></div></div>";
    }
} 
else {
    echo "<h2 class='text-center'>No Job Avaiable</h2>";
}
			}

//$sql = "SELECT  name, jobdone, skill, rate, country FROM freelancer where role ='freelancer'";
//$result = $conn->query($sql);



 
CloseCon($conn);
 
?>