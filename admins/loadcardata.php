<?php
session_start();
if(isset($_POST['loc'])){
    include "db.php";
    $loc = $_POST['loc'];
    $car_type= $_POST['car_type'];
    $dloc = $_POST['dloc'];
   if($loc=='all' && $car_type =='all'){
     $query = "SELECT * FROM drivers;";
 }
else{
        $query = "SELECT * FROM drivers WHERE loc='$loc' AND car_type='$car_type'";
        $_SESSION['dloc'] = $dloc;
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
                            <!--<button id="button1" type="button"  class="btn btn-primary submit" onclick="bookCab(<?php echo $data['driver_id'];?>, '<?php echo $dloc;?>', '<?php echo $loc;?>', '<?php echo $_SESSION['username'];?>')">Book Cab</button>-->
                            <input onclick="bookCab(<?php echo $data['driver_id'];?>, '<?php echo $dloc;?>', '<?php echo $loc;?>', '<?php echo $_SESSION['username'];?>')" type="button" value="Book Cab" id="button1"></input>
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
?>
<script>
    function bookCab(id, destloc, ploc, passname){
          var x = document.getElementById("button1");
          let dloc = destloc;
          let loc = ploc;
          let did = id;
          let pname = passname;
          $.post('admins/addTravel.php', {
              dloc: dloc,
              loc: loc,
              did: did,
              pname: pname
          }, function (result){
              alert(result);
          });
          if(x.value == "Book Cab") x.value = "Booked";
      }
</script>
