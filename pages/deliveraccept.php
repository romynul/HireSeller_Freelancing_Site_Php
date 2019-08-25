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
//added
    $amount = $_POST['amountt'];
    $net_amount = $amount - ($amount * 0.10);
    $freelan = $_POST['bidderr'];

    $sql = "UPDATE bid SET bid_status = '4' WHERE bid_id ='$bidids'";

    $sql2 = "UPDATE freelancer SET balance = balance +'$net_amount' WHERE username ='$freelan'";
    
    if (($conn->query($sql) === TRUE) && ($conn->query($sql2) === TRUE)) {
        echo "<script>
        window.location.href='dashboard.php';
        alert('Project Completed');
</script>";
    } else {
        echo "Server Problem Can't be Accepted: " . $conn->error;
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