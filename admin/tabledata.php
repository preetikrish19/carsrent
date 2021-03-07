
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'DB.php';
$query = "SELECT * FROM food";
$result = $con->query($query);

if($result->num_rows > 0){
    ?>
    <table class="table table-dark table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Add to Cart</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while($row = $result->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><button class="btn btn-success" id="<?php echo $row['id'];?>btn" onclick="addtocart(<?php echo $row['id'];?>,'<?php echo $row['name'];?>',<?php echo $row['price'];?>)">Add To Cart</button> </td>
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