<?php
if(isset($_POST['loc'])){
    include "db.php";
    $loc = $_POST['loc'];
    $size = $_POST['size'];
    $query = '';
    if($loc=='all' && $size =='all'){
        $query = "SELECT * FROM car_details;";
    }else{
        $query = "SELECT * FROM car_details WHERE loc='$loc' AND size='$size'";
    }

    if($result = $con->query($query)){
        ?>
        <div class = 'row'>
        <?php

        while($data = $result->fetch_assoc()){
        ?>
            <div class="col-md-6">
            <div class="card">
                <div class="card-header"><?php echo $data['carname']?></div>
                <div class="card-body">
                    <img src="<?php if($loc!='all')echo "admins/";?>img/<?php echo $data['image']?>" class="float-left img-fluid" style="max-height: 200px">
                    <div class="float-right">
                    <p>NumPlate: <?php echo $data['numplate']?></p>
                    <p>Driver Name: <?php echo $data['driver']?></p>
                    <p>Driver Phone: <?php echo $data['phone']?></p>
                    <p>Location: <?php echo $data['loc']?></p>
                    <p>Type of Car: <?php echo $data['size']?></p>
                    </div>
                </div>
                <div class="card-footer">
                    <p>Price Per KM: <?php echo $data['ppkm']?></p>
                    <p>Price Per Day: <?php echo $data['ppd']?></p>
                    <?php
                        if($loc!='all'){
                            ?>
                            <button type="button" class="btn btn-primary submit" onclick="rentcar(<?php $data['carid'];?>)">Book Cab</button>
                            <?php
                        }
                    ?>
                </div>
            </div>
            </div>

<?php

        }
        ?>
        </div>
            <?php
    }else{
        echo $con->error;
    }
}else {
    echo "NOT VIEWABLE";
}