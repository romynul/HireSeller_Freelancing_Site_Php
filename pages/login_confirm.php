<?php
require 'config.php';
session_start();
$un=$_POST['user_name'];
$pw=$_POST['password'];

$conn = OpenCon();



$sql="select status, username, password,role from freelancer where username='$un' and password='$pw'";

$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();


            if (mysqli_num_rows($result)==1)
            {
                if($row["status"]=='5'){
                    echo "<script>
                window.location.href='../index.php';
                alert('You are Temporarily Blocked Please Contact with admin@hireseller.com');
                </script>";
                }
                else
                {
                    $_SESSION['loggedUser']= $un;
                $_SESSION['loggedUserType'] = $row["role"];
                header("location:dashboard.php");
                }

               
    		}
            else
            {
               echo "<script>
                window.location.href='login.php';
                alert('Wrong Username And password');
                </script>";
            }
            mysqli_close($conn);

            ?>