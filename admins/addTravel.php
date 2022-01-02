<?php
session_start();
if(isset($_POST['did']))
{
    include "db.php";
    $loc = $con->real_escape_string($_POST['loc']);
    $dloc = $con->real_escape_string($_POST['dloc']);
    $pname = $con->real_escape_string($_POST['pname']);
    $did = $_POST['did'];
    $name = $con->real_escape_string($_POST['name']);
    $q = "INSERT INTO travel (dest, pick, did, pname) VALUES ('$dloc', '$loc', '$did', '$pname')";
    $q1="UPDATE reply SET req=0 WHERE dname=$name";
    $result=$con->query($q1);
    
    if($con->query($q))
    {
        echo "Requested Driver...Please Wait for Reply from driver";
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