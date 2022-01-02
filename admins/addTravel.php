<?php
session_start();
if(isset($_POST['did']))
{
    include "db.php";
    $loc = $con->real_escape_string($_POST['loc']);
    $dloc = $con->real_escape_string($_POST['dloc']);
    $pname = $con->real_escape_string($_POST['pname']);
    $did = $_POST['did'];
    $q = "INSERT INTO travel (dest, pick, did, pname) VALUES ('$dloc', '$loc', '$did', '$pname')";
    if($con->query($q))
    {
        echo "Requested Driver Wait for Reply from driver";
    }
    else
    {
        echo "Error";
    }
}
else
{
    echo "NOT VIEWABLE";
}
?>