<?php
session_start();
include 'admins/db.php';
$uname=$_SESSION['username'];
$query = "SELECT * FROM passengers WHERE name='$uname'";
$query1="SELECT * FROM travel LEFT JOIN drivers ON travel.did=drivers.driver_id WHERE pname='$uname'";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <title>Find your car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="main.css" rel="stylesheet">
    <link href="sty.css"  rel="stylesheet"> 
    <link href="logo.jpg" rel="icon">
</head>
<body>
<h2 style="text-align:center"><b>User Profile<b></h2>
<div style="align:center">
    <?php  
      if($result = $con->query($query)){
    ?>
    <?php
      while($data = $result->fetch_assoc(MYSQL_ASSOC)){
    ?>
     <div class="card">
  <p>NAME :<?php echo $data['name']?></p>
  <p>EMAIL ID : <?php echo $data['email']?></p>
  <p>AGE : <?php echo $data['age']?></p>
  <p>PHONE NUMBER : <?php echo $data['phone']?></p>
    </div> 
</div>     
<?php 
    }
    }
  ?>
<table class="center">
<?php 
if($result1 = $con->query($query1)){
   $details = mysqli_fetch_all($result1, MYSQLI_ASSOC);
    ?>
<p style="color:white;text-align:center">TRAVEL HISTORY</p>
  <tr>
    <th>FROM</th>
    <th>TO</th>
    <th>DRIVER</th>
    <th>CAR TYPE</th>
  </tr>
  <?php
foreach($details as $data1){
?>
  <tr>
    <td><?php echo $data1['pick']?></td>
    <td><?php echo $data1['dest']?></td>
    <td><?php echo $data1['driver']?></td>
    <td><?php echo $data1['car_type']?></td>
  </tr>
  </table>
  <?php}}?>
</body>
</html>