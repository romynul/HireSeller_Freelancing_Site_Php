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

    $sql = "UPDATE bid SET bid_status = '2' WHERE bid_id ='$bidids'";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>
        window.location.href='dashboard.php';
        alert('Deliver Rejected');
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