<?php
if(isset($_POST['tid']))
{
    include "db.php";
    $tid = $_POST['tid'];
    $sql = "UPDATE travel SET request=1 WHERE tid=$tid";
    if($con->query($sql))
    {
        echo "Accepted";
    }
    else
    {
        echo "Error";
    }
} 
else{
    echo "ERROR!!";
}
?>