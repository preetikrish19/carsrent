<?php  ?>
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark">

        <a class="navbar-brand btn btn-dark btn-lg" href="index.php" ><h1>RentAcaR.com</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto pd-2">
                <li class="nav-item">
                    <a class="nav-link btn btn-dark btn-lg" href="menu.php">Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-dark btn-lg" href="cart.php"><?php
                        if(isset($_SESSION['username'])){
                            echo $_SESSION['username']."'s ";
                        }
                    ?>Cart</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link btn btn-dark btn-lg" href="#contact-us">Contact Us</a>
                </li>


                <li class="nav-item">
                    <?php
                    if(isset($_SESSION['username'])){
                        ?>
                        <a class="nav-link btn btn-dark btn-lg" href="logout.php">Logout</a>

                        <?php
                    }else{
                        ?>
                        <a class="nav-link btn btn-dark btn-lg" href="login.php">Login</a>

                        <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container d-flex align-items-center justify-content-center">
		<div class="row">
			<div class="box">
				<header class="text-center col-12">
					<div class="heading">	<h2 style="opacity: 1" class="text-uppercase"> SEARCH YOUR CAR</h2></div>
          <form class="rental" action="index.php" method="post">
            <label for="pickup">Enter your pick-Up location:</label>
            <select id="pickup" name="pickup">
              <option value="guindy">Guindy</option>
              <option value="chepauk">Chepauk</option>
              <option value="ashoknagar">Ashok Nagar</option>
              <option value="tambaram">tambaram</option>
            </select>
            <label for="seats">Car type</label>
            <select id="pickup" name="pickup">
              <option value="micro">Micro</option>
              <option value="=mini">Mini</option>
              <option value="suv"> SUV </option>
            </select>
          </form>
				</header>
				<section class="text-center col-12">
					<hr><a href="https://mailchi.mp/2161d41567c2/subscription">
					<button type="button" class="btn btn-info btn-m">FIND OUT MORE</button></a>
				</section>
			</div>
		</div>
	</div>


  </body>
</html>
