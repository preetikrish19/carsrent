<?php
session_start();
if(isset($_POST['phone'])) {
    include 'DB.php';
    $name = $con->real_escape_string( $_POST['name']);
    $phone = $_POST['phone'];
    $pwd = $con->real_escape_string( $_POST['password']);

    $query = "INSERT INTO user (name, phoneno, password) VALUES ('$name', $phone, '$pwd')";
    if ($con->query($query)) {
        echo "SUCCESS";
    } else {
        echo $con->error;
    }
}else{
    echo "NOT VIEWABLE";
}