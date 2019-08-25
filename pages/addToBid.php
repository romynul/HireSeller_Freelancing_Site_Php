<?php 
session_start();
$user = '';
if(isset($_SESSION['loggedUser']))
{
    if($_SESSION['loggedUserType'] == "freelancer")
    {
        $user = $_SESSION['loggedUser'];
    }else header('location:../index.php');
}else header('location:../index.php');
//check if submit
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    include("config.php");
    $conn = OpenCon();
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    
    $duration = $_POST['duration'];
    $amount = $_POST['amount'];
    $job_by = $_POST['jobby'];
    $jobid = $_POST['jobid'];
    $cover = $_POST['cover'];
    $date = date('Y-m-d H:i:s');
    
    $sql = "INSERT INTO bid (bid_by, job_id, job_by, bid_amount, bid_duration, bid_date, bid_status,cover_letter) VALUES ('$user', '$jobid', '$job_by', '$amount', '$duration', '$date', '1', '$cover')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>
        window.location.href='dashboard.php';
        alert('SuccessFully Applied');
</script>";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    
</body>
</html>