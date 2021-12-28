<?php
session_start();
include('db.php');
$query = "SELECT * FROM passengers WHERE name=$_SESSION[username]";
$query1="SELECT * FROM travel 
LEFT JOIN car_details ON travel.did = car_details.car_id WHERE pname=$_SESSION[username]";
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
    <link href="logo.jpg" rel="icon">
    <style>
      body{
        background-image: url('background.jpeg');
        background-repeat: no-repeat;
        background-size: cover;
        }
      hr{
       	border-color: black;
       	border-width: 3px;
       	max-width: 65px;
        }
       .row{
       	padding-top: 150px;
         }
      .container{
      	height: 100%;
      }
      .box{
      	margin: 30px;
        background-color: #ffffff;
        border: 1px solid black;
        /*border-radius: 300px;*/
        opacity: 0.6;
      }
      .box .heading{
      	color: #FFCA00;
      	font-weight: bold;
      	margin: 5%;
        font-weight: bold;
        color: #000000;
      }
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  margin: auto;
  text-align: center;
  font-family: arial;
     }
.title{
  color: grey;
  font-size: 18px;
  }

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
 }
a{
  text-decoration: none;
  font-size: 22px;
  color: black;
 }
button:hover, a:hover {
  opacity: 0.7;
 }
h2{
  color: white;
 }
table{
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  }
td, th{
  border: 1px solid #dddddd;
  text-align: left;
  padding: 4px;
  color:white;
 }
.center{
  margin-left: auto;
  margin-right: auto;
 }
tr:nth-child(even) {
  background-color: black;
 }
</style>
</head>
<body>
<h2 style="text-align:center"><b>User Profile<b></h2>
<form action="updatepassdet.php">
<div style="align:center">
    <?php  
           if($result = $con->query($query)){
    ?>
    <?php
     while($data = $result->fetch_assoc()){
        ?>
     <div class="card">
  <p>NAME :<?php echo $data['name']?></p><input type="text" id="name" name="name"><br>
  <p>EMAIL ID : <?php echo $data['email']?></p><input type="text" id="email" name="email" ><br>
  <p>AGE : <?php echo $data['age']?></p><input type="text" id="age" name="age" ><br>
  <p>PHONE NUMBER : <?php echo $data['phone']?></p><input type="text" id="phone" name="phone"><br>
  <input type="submit" value="SAVE">
</div>
        <?php }}?>
       
<table class="center">
<?php if($result1 = $con->query($query1)){
   $details = mysqli_fetch_all($result1, MYSQLI_ASSOC);
    ?>
<?php
foreach($details as $data1){
?>
<p style="color:white;text-align:center">TRAVEL HISTORY</p>
  <tr>
    <th>FROM</th>
    <th>TO</th>
    <th>DRIVER</th>
    <th>CAR TYPE</th>
  </tr>
  <tr>
    <td><?php echo $data1['pick']?></td>
    <td><?php echo $data1['dest']?></td>
    <td><?php echo $data1['driver']?></td>
    <td><?php echo $data1['size']?></td>
  </tr>
  </table>
  <?php}}?>
</div>
</form>      
</body>
</html>