<?php
    include('confiqa.php');

    $e=$_REQUEST["e"];
    $result=mysqli_query($conn,"SELECT * FROM freelancer WHERE email LIKE '$e' ");
    $rows=mysqli_num_rows($result);
    
    if ($rows> 0)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
?>