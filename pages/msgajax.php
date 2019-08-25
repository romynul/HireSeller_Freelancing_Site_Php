<?php
    include('confiqa.php');

    $user = '';

    if(isset($_SESSION['loggedUser']))
    {
        $user = $_SESSION['loggedUser'];
    }

    $p=$_REQUEST["p"];
    $u=$_REQUEST["u"];
   
        $sql = "SELECT * FROM message WHERE (send_by = '$u' AND send_to = '$p') OR (send_by = '$p' AND send_to = '$u')";

        $rs = mysqli_query($conn,$sql);
    
    
        foreach($rs as $row)
        {
            echo "<div>";
            echo $row['send_by'].": ".$row['message'];
            echo "</div><br>";
        }

    
  
 
?>