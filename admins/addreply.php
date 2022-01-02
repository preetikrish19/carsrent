<?php
session_start();
    include "db.php";
    $dname = $con->real_escape_string($_POST['dname']);
     $q="UPDATE reply SET req=0 WHERE dname='$dname'";
    if($con->query($q))
    {
        echo $dname;
        echo "WILL NOTIFY YOU!";
    }
    else
    {
        echo "Error";
    }
?>