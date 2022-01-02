<?php
    include "db.php";
    $dd = $_POST['dd'];
    $sql = "UPDATE reply SET req=1 WHERE dname='$dd'";
    if($con->query($sql))
    {
        echo "REPLY SENT";
    }
    else
    {
        echo "Error";
    }
?>