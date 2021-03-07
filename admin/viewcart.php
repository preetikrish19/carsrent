
<?php
include 'DB.php';
if(isset($_POST['userid'])){
    $userid = $_POST['userid'];
$query = "SELECT * FROM cart WHERE userid=$userid AND paid=0";
$result = $con->query($query);

if($result->num_rows > 0){

    $sum = 0;
    ?>
    <table class="table table-dark table-striped table-hover">
        <thead>
        <tr>
            <th>Txn ID</th>
            <th>USERID</th>
            <th>FOODID</th>
            <th>NAME</th>
            <th>Price</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_assoc()){
            $sum+=$row['price'];
            ?>
            <tr>
                <td><?php echo $row['txnid'];?></td>
                <td><?php echo $row['userid'];?></td>
                <td><?php echo $row['foodid'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><button class="btn btn-danger" onclick="deleteData(<?php echo $row['txnid'];?>)">Delete Item</button> </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <button type="button" id="payNowBtn" class="btn btn-success" onclick="paynow()"> Pay Rs.<?php echo $sum; ?></button>
    <?php
}
else{
    echo "NO ITEMS IN YOUR CART, CLICK <a href='menu.php'>HERE</a> TO BUY NOW";;
}
$con->close();
}else{
    echo "NOT VIEWABLE";
}