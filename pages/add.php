<?php 
include('confiqa.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$user = $_POST['user_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$state = $_POST['state'];
$country = $_POST['country'];
$zip_code = $_POST['zip_code'];
$nid = $_POST['nid'];
$pass = md5($_POST['password']);
$role = $_POST['role'];
$sql = "INSERT INTO freelancer (username, name, last_name, phone, email, password, dob, address, state, country, zipcode, nationalid, jobdone, role, balance) VALUES ('$user', '$fname', '$lname', '$phone', '$email', '$pass', '$dob', '$address', '$state', '$country', '$zip_code', '$nid', '0', '$role', '0')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
        window.location.href='login.php';
        alert('You Have Successfully Registered ');
</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>