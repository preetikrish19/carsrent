<?php
if(isset($_POST['loc'])){
    include "db.php";
    $loc = $_POST['loc'];
    $car_type= $_POST['car_type'];
    $query = '';
   if($loc=='all' && $car_type =='all'){
     $query = "SELECT * FROM drivers;";
 }
else{
        $query = "SELECT * FROM drivers WHERE loc='$loc' AND car_type='$car_type'";
}
    if($result = $con->query($query)){
        ?>
        <div class = 'row'>
        <?php
        while($data = $result->fetch_assoc()){
        ?>
            <div class="col-md-6">
            <div class="card">
                <div class="card-header"><?php echo $data['car_name']?></div>
                <div class="card-body">
                    <div class="float-left">
                        <img src="icon.jpg" alt="">
                       </div>
                    <div class="float-right">
                    <p>NumPlate: <?php echo $data['numplate']?></p>
                    <p>Driver Name: <?php echo $data['name']?></p>
                <!--    <p>Driver Phone: <?php //echo $data['phone']?></p> -->
                    <p>Location: <?php echo $data['loc']?></p>
                    <p>Type of Car: <?php echo $data['car_type']?></p>
                    </div>
                </div>
                <div class="card-footer">
                     <?php
               if($loc!='all'){
                           ?>
                            <button type="button"  class="btn btn-primary submit" onclick="rentcar(<?php $data['driver_id'];?>)">Book Cab</button>
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
    }
    else{
        echo $con->error;
   }
}
else 
{
echo "NOT VIEWABLE";
}