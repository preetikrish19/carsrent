
<?php
include 'DB.php';
if(isset($_POST['userid'])){
    $userid = $_POST['userid'];
    $query = "SELECT * FROM cart WHERE userid=$userid AND paid=1";
    $result = $con->query($query);

    if($result->num_rows > 0){

        ?>
        <table class="table table-dark table-striped table-hover">
            <thead>
            <tr>
                <th>Txn ID</th>
                <th>USERID</th>
                <th>FOODID</th>
                <th>NAME</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['txnid'];?></td>
                    <td><?php echo $row['userid'];?></td>
                    <td><?php echo $row['foodid'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['price'];?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <?php
    }
    else{
        echo "NO DATA";
    }
    $con->close();
}else{
    echo "NOT VIEWABLE";
}