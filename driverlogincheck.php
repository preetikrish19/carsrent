<?php
session_start();
if(isset($_POST['email'])) {
    include "admins/db.php";
    $email = $con->real_escape_string($_POST['email']);
    $passwd = $con->real_escape_string( $_POST['passwd']);

    $query = "SELECT * FROM drivers WHERE email='$email'";
    if ($result = $con->query($query)) {
        $row = $result->fetch_assoc();
        if ($passwd == $row['passwd']) {
            $_SESSION['username'] = $row['name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['did'] = $row['driver_id'];
            echo "SUCCESS";
        } else {
            echo 'Incorrect Password';
        }
    } else {
        echo $con->error;
    }
}else{
    echo "NOT VIEWABLE";
}