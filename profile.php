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
      while($row = $result->fetch_row())
      {
    ?>
     <div class="card">
  <p>NAME :<?php echo $row[1]?></p>
  <p>EMAIL ID : <?php echo $row[0]?></p>
  <p>AGE : <?php echo $row[2]?></p>
  <p>PHONE NUMBER : <?php echo $row[3]?></p>
    </div> 
</div>     
<?php 
    }
    }
  ?>
   <p style="color:black; text-align:center"><b>TRAVEL HISTORY<b></p>
<table class="center">
<tr>
    <th style="color:black">FROM</th>
    <th style="color:black">TO</th>
    <th style="color:black">DRIVER</th>
    <th style="color:black">CAR TYPE</th>
</tr>
 <?php if($result1 = $con->query($query1)){ 
   while($data1 = $result1->fetch_assoc()){
     ?>
  <tr>
  <td><?php echo $data1['pick']?></td>
    <td><?php echo $data1['dest']?></td>
    <td><?php echo $data1['name']?></td>
    <td><?php echo $data1['car_type']?></td>
  </tr>
  <?php  } }?>
  </table>
</body>
</html>