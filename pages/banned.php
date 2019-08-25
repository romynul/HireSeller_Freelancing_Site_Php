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
    $username = $_POST['username'];
    $status=$_POST['status'];
    

    if($status=='1'){
        $sql = "UPDATE freelancer SET status = '5' WHERE username ='$username'";
         if (($conn->query($sql) === TRUE)) {
        echo "<script>
        window.location.href='dashboard.php';
        alert('Freelancer Successfully Banned ');
</script>";
    } 
    else {
        echo "Error updating record: " . $conn->error;
    }
    }
    else{
        $sql = "UPDATE freelancer SET status = '1' WHERE username ='$username'";
         if (($conn->query($sql) === TRUE)) {
        echo "<script>
        window.location.href='dashboard.php';
        alert('Freelancer Successfully Active ');
</script>";
    } 
    else {
        echo "Error updating record: " . $conn->error;
    }
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