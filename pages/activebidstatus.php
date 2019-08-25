<?php 
session_start();
$user = '';
if(isset($_SESSION['loggedUser']))
{
    if($_SESSION['loggedUserType'] == 'client')
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
    $jobid = $_POST['jobid'];
    $amount = $_POST['amount'];
    $balance ="";
    $bider = $_POST['bidby'];
    $date = date('Y-m-d H:i:s');
    $comm= $amount*0.1;
    $payoff = $amount - $comm;
    $sql4 = "SELECT  balance FROM freelancer where username='$user'";
$result = $conn->query($sql4);
if ($result->num_rows > 0) {
   
    while(($row = $result->fetch_assoc()) ) {
        $balance= $row['balance'];

    }
}

    if ($balance>$amount){
    $sql1 = "UPDATE bid SET bid_status = '2' WHERE bid_id ='$bidids'";
    $sql = "UPDATE job SET job_status = '2' WHERE job_id ='$jobid'";
    $sql2 = "UPDATE freelancer SET balance = balance-'$amount' WHERE username ='$user'";
    //added
    $sql3 = "INSERT INTO transaction(client,freelancer,date_time,status,amount,order_id,commission) VALUES ('$user','$bider','$date','pending','$amount','$jobid','$comm')";
    
    if (($conn->query($sql) === TRUE) && ($conn->query($sql1) === TRUE) && ($conn->query($sql2) === TRUE) && ($conn->query($sql3) === TRUE)) {
        echo "<script>
        window.location.href='dashboard.php';
        alert('Job Started');
</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    }

    else{
        echo "<script>
        window.location.href='dashboard.php';
        alert('Not Enough Balance');
</script>";
    }
    
    $conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Client</title>
</head>
<body>
<br>
</body>
</html>