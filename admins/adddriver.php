<?php
session_start();
if(isset($_POST['email'])) {
    include 'db.php';
    $name = $con->real_escape_string( $_POST['name']);
    $car_type = $con->real_escape_string($_POST['car_type']);
    $passwd = $con->real_escape_string( $_POST['passwd']);
    $email = $con->real_escape_string($_POST['email']);
    $car_name = $con->real_escape_string($_POST['car_name']);
    $loc= $con->real_escape_string( $_POST['loc']);
    $numplate = $con->real_escape_string($_POST['numplate']);

    $_SESSION['username'] = $name;
    $_SESSION['email']= $email;
    $query = "INSERT INTO drivers (name,car_type, passwd, email,loc,numplate,car_name) 
    VALUES ('$name', '$car_type', '$passwd', '$email','$loc','$numplate','$car_name')";
    $q="INSERT INTO reply (dname,req) VALUES('$name',-1)";
    $res=$con->query($q);
    if ($con->query($query)) {
        echo "SUCCESS";
    } else {
        echo $con->error;
    }
}else{
    echo "NOT VIEWABLE";
}