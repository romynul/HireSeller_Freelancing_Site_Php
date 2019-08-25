<?php 
include('confiqa.php');
session_start();
if (!(isset($_SESSION['loggedUser']))){
    header("location:../index.php");

}//else //{
$user= $_SESSION['loggedUser'];


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
//$user = $_POST['user_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$state = $_POST['state'];
$country = $_POST['country'];
$zip_code = $_POST['zip_code'];
$nid = $_POST['nid'];
$skill = $_POST['skill'];
$rate = $_POST['rate'];
$sql = "update freelancer set name='$fname' , last_name='$lname', phone ='$phone', email ='$email', dob ='$dob', address ='$address', state ='$state', country ='$country', zipcode ='$zip_code', nationalid ='$nid', skill='$skill', rate='$rate' where username = '$user'";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        window.location.href='dashboard.php';
        alert('Data Updated');
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>