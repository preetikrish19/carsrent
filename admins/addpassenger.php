<?php
session_start();
if(isset($_POST['email'])) {
    include 'db.php';
    $name = $con->real_escape_string( $_POST['name']);
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $pwd = $con->real_escape_string( $_POST['pwd']);
    $email = $con->real_escape_string($_POST['email']);

    $query = "INSERT INTO passengers (name, phone, pwd, age, email) VALUES ('$name', $phone, '$pwd', $age, '$email')";
    if ($con->query($query)) {
        echo "SUCCESS";
        $_SESSION['username']=$name;
        $_SESSION['email']=$email;
        } else {
        echo $con->error;
    }
}else{
    echo "NOT VIEWABLE";
}