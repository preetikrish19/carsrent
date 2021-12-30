<?php
session_start();
if(isset($_POST['email'])) {
    include 'db.php';
    $email = $con->real_escape_string($_POST['email']);
    $pwd = $con->real_escape_string( $_POST['pwd']);

    $query = "SELECT * FROM passengers WHERE email='$email'";
    if ($result = $con->query($query)) {
        $row = $result->fetch_assoc();
        if ($pwd == $row['pwd']) {
            $_SESSION['username'] = $row['name'];
            $_SESSION['email']=$row['email'];
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