<?php
session_start();
include "admins/db.php";
$did = $_SESSION['did'];
$q = "SELECT * FROM travel WHERE did='$did' AND request=0";
$result = $con->query($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rent A CAR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link href="currlogo.png" rel="icon">
</head>

<body style="background: #ABA6A6">
<div class="container-fluid p-0">
<header>
<div class="jumbotron text-white jumbotron-image shadow" id="top" >
    <nav class="navbar navbar-expand-md navbar-dark">

        <a class="navbar-brand btn btn-dark btn-lg" href="index.php" ><h1>FindACar.com</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto pd-2">
                <li class="nav-item">
                  <!-- <a class="nav-link btn btn-dark btn-lg" href="findcars.php">Find a car</a> -->
                </li>


                <li class="nav-item">
                    <a class="nav-link btn btn-dark btn-lg" href="#contact-us">Contact Us</a>
                </li>
               


                <li class="nav-item">
                    <?php
                    if(isset($_SESSION['username'])){
                        ?>
                        <a class="nav-link btn btn-dark btn-lg" href="logout.php">Logout</a>
                       <!--<a class="nav-link btn btn-dark btn-lg" href="profile.php">Profile</a> -->

                        <?php
                    }
                    /* else{
                        ?>
                        <a class="nav-link btn btn-dark btn-lg" href="login.php">Passenger Login</a>
                        <a class="nav-link btn btn-dark btn-lg" href="driverlogin.php">Driver Login</a>
                        <?php
                    }*/
                    ?>
                </li>
            </ul>
        </div>
    </nav>

    <h1 class="display-3 text-center" id="hmb" style="color: black;">
        Customer Requests
    </h1>
    <p class="push-spaces"></p>
</div>
</header>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Customer Name</th>
      <th scope="col">Pick Up</th>
      <th scope="col">Destination</th>
      <th scope="col">Accept</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    while($row = $result->fetch_row())
    {
        //printf("%s \n", $row[2]);
  ?>
    <tr>
      <td><?php echo $row[4];?></td>
      <td><?php echo $row[2];?></td>
      <td><?php echo $row[1];?></td>
      <td><input id="<?php echo $row[0];?>" type="button" value="Accept" onclick="acceptRequest(<?php echo $row[0];?>)"></td>
    </tr>
    <?php }?>
  </tbody>
</table>
<footer class="mt-4">
<div class="jumbotron text-center bg-dark text-light" style="margin-bottom:0" id="contact-us">
    <div class="row">
        <div class="col-lg-6">
            <h3>FindAcaR.com</h3>
            <p>35, Adyar Main Road,<br>Madhya Kailash, <br> Chennai.<br><br>
                <span class="material-icons" style="font-size: 16px;">call</span> <a href="callto:+919432112345" >+91 94321 12345</a><br>
                <span class="material-icons" style="font-size: 16px;">email</span><a href="mailto: hmb@email.com" >findacar@email.com</a><br>
            </p>
        </div>
        <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3887.478094832939!2d80.24905!3d13.005198000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16f41d10f57949e9!2sKasthurba%20Nagar!5e0!3m2!1sen!2sus!4v1613743064308!5m2!1sen!2sus" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
</footer>
    <button onclick="topFunction()" id="myBtn" class="btn btn-danger"  title="Go to top"><i class="fa fa-arrow-up"></i> </button>

</div>
<script>
function acceptRequest(trid)
{
    let tid=trid;
    var x = document.getElementById(tid);
    $.post('admins/acceptRequest.php', {tid: tid}, 
            function (result){
                alert(result);
            });
    if(x.value=="Accept") x.value=="Accepted";
}
</script>
</body>
</html>
