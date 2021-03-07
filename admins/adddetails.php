<?php
if(isset($_POST['carname'])){
    include "db.php";
    $carname = $con->real_escape_string($_POST['carname']);
    $image = $con->real_escape_string($_POST['image']);
    $numplate = $con->real_escape_string($_POST['numplate']);
    $driver = $con->real_escape_string($_POST['driver']);
    $phone = $con->real_escape_string($_POST['phone']);
    $ppd = $_POST['ppd'];
    $ppkm = $_POST['ppkm'];
    $loc = $_POST['loc'];
    $size = $_POST['size'];

    $query = "INSERT INTO car_details (carname, image, numplate, driver, phone, ppd, ppkm, loc, size)
               VALUES ('$carname', '$image', '$numplate', '$driver', '$phone', $ppd, $ppkm, '$loc', '$size')";

    if($con->query($query)){
        echo "SUCCESS";
    }else{
        echo $con->error;
    }
}else{
    echo 'NOT VIEWABLE';
}