<?php
session_start();
if(isset($_POST['email'])) {
    include 'db.php';
    $name = $con->real_escape_string( $_POST['name']);
    $car_type = $_POST['car_type'];
    $passwd = $con->real_escape_string( $_POST['passwd']);
    $email = $con->real_escape_string($_POST['email']);

    $query = "INSERT INTO passengers (name,car_type, passwd, email) VALUES ('$name', $car_type, '$passwd', '$email')";
    if ($con->query($query)) {
        echo "SUCCESS";
    } else {
        echo $con->error;
    }
}else{
    echo "NOT VIEWABLE";
}