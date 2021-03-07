<?php
session_start();

if(isset($_POST['email'])){
    if($_POST['email']=='admin@cars.com' && $_POST['pwd']=='admin'){
        $_SESSION['admin'] = true;
        echo "SUCCESS";
    }else{
        echo "Incorrect Username/password";
    }
}else{
    echo "NOT VIEWABLE";
}
