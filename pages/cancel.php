<?php 
session_start();
$user = '';
if(isset($_SESSION['loggedUser']))
{
    if($_SESSION['loggedUserType'] == 'admin')
    {
        $user = $_SESSION['loggedUser'];
    }else header('location:../index.php');
}else header('location:../index.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include("config.php");
    $conn = OpenCon();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $bidids = $_POST['bidid'];
    //$note= $_POST['deliver_n'];
    $jobid="";
    $sql5 = "SELECT  job_id FROM bid where bid_id='$bidids'";
$result = $conn->query($sql5);
if ($result->num_rows > 0) {
   
    while(($row = $result->fetch_assoc()) ) {
        $jobid= $row['job_id'];

    }

    $sql = "UPDATE bid SET bid_status = '5' WHERE bid_id ='$bidids'";

    $sql1 = "UPDATE job SET job_status = '5' WHERE job_id ='$jobid'";
    
    if (($conn->query($sql) === TRUE) && ($conn->query($sql1) === TRUE)) {
        echo "<script>
        window.location.href='dashboard.php';
        alert('Project Cancelled');
</script>";
    } 
    else {
        echo "Server Problem Can't be Delivered: " . $conn->error;
    }
}
    $conn->close();
}
?>
