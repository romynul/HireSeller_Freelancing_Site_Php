<?php

function getFile($id)
{
    $con = mysqli_connect("localhost","root","","hireseller");
    
    $results = mysqli_query($con,"SELECT * FROM bid WHERE bid_id = $id ");
    $filex = "";
    foreach($results as $row)
    {
        $filex = $row['file_path'];
    }

    return $filex;
}

?>