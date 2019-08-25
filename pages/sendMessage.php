<?php
    include('confiqa.php');

 

    $p=$_REQUEST["p"];
    $u=$_REQUEST["u"];
    $m=$_REQUEST["m"];
    $d = date("Y-m-d H:i:s");

    $sql = "INSERT INTO message (send_by, send_to, message, time) VALUES ('$u', '$p', '$m', '$d')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
        window.location.href='dashboard.php';
        alert('Messages Send Successfully');
</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>