<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include "DB.php";
    $txnid = $_POST['txnid'];
    $query = "DELETE FROM cart WHERE txnid = ".$txnid;
    if($con->query($query)){
        echo "SUCCESS";
    }else{
        echo "FAILURE";
    }
}else{
    echo "NOT VIEWABLE";
}