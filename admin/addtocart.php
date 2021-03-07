<?php
include "DB.php";

if(isset($_POST['userid'])){
    $userid = $_POST['userid'];
    $foodid = $_POST['foodid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $query = "INSERT INTO cart (userid, foodid, name, price, paid) VALUES ($userid, $foodid, '$name', $price, 0)";

    if($con->query($query)){
        echo "ITEMID $foodid = $name, ADDED TO CART SUCCESSFULLY";
    }else{
        echo $con->error;
    }
}else{
    echo "NOT VIEWABLE";
}