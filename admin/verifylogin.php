<?php
session_start();
if(isset($_POST['phone'])) {
    include 'DB.php';
    $phone = $_POST['phone'];
    $pwd = $con->real_escape_string( $_POST['password']);

    $query = 'SELECT * FROM user WHERE phoneno='.$phone;
    if ($result = $con->query($query)) {
        $row = $result->fetch_assoc();
        if ($pwd == $row['password']) {
            $_SESSION['userid'] = $row['id'];
            $_SESSION['username'] = $row['name'];
            echo "<script>
                    alert('Hello ".$row['name'] .", logged in Successfully.');
                    window.location.href='menu.php';

                </script>";
        } else {
            echo 'Incorrect Password';
        }
    } else {
        echo $con->error;
    }
}else{
    echo "NOT VIEWABLE";
}