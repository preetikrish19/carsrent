<?php
session_start();
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
    <link href="logo.jpg" rel="icon">

</head>

<body style="background: #ABA6A6">
<div class="container-fluid p-0">
<header>
<div class="jumbotron text-white jumbotron-image shadow" id="top" >
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

    <h1 class="display-3 text-center" id="hmb">
        Rent A Car!!!
    </h1>
    <p class="push-spaces"></p>
</div>
</header>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-md-6 mt-3">
            <div class="card text-light p-4 " style="background:#807C7C">
                <h2>VISION</h2>

                <p>Legacy aspires to be the choice car lease and rental company both nationally and across our borders.
                We offer both excellence and reputable services among the Corporate, NGO, GoK and foreign investors that have a high appetite for 
                semi-executive and executive vehicles that ensure and sustain their corporate image on our roads. 
                We also offer project management fleet solutions and geographic consulting. <br>
                Legacy thrives on the fact that we stand in the balance between you getting there and how you get there.   
                </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card text-light p-4" style="background:#581E3A">
                <h2>SERVICES</h2>
                <p>We provide a variety of top-of-the-range vehicles based on what you need.<br>
                We provide vehicles to organizations with very reasonable contracts. We can also manage your fleet for you; keeping track of the vehicles and drivers, monitoring fuel costs and mileage, and maintenance of the fleet.<br>
                Going out into the wild will require vehicles that are in great condition and capable of handling the rugged terrain of nature. With one of our 4-wheel-drive SUVs you are guaranteed for an enjoyable and stress-free safari.<br>
                All our vehicles are properly maintained, have enough spare tires and first aid kits to ensure that your trip is as smooth and enjoyable as possible.
                </p>    
                </div>
        </div>
    </div>
    <p class="push-spaces"></p>
</div>


<div class="container text-center text-light p-2" style="background: #B68989">
    <h2>Reviews</h2>
    <div class="text-center">
        <div id="demo" class="container mx-auto carousel slide mt-2 p-2" data-ride="carousel">

            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
            </ul>

            <div class="carousel-inner mx-auto">
                <div class="carousel-item active">
                    <img class="img-fluid" src="car2.jpg" alt=>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="car3.jpg" alt=>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="car4.jpg" alt=>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="car5.jpg" alt=>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="car6.jpg" alt=>
                </div>
            </div>

            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </div>
</div>
<footer class="mt-4">
<div class="jumbotron text-center bg-dark text-light" style="margin-bottom:0" id="contact-us">
    <div class="row">
        <div class="col-lg-6">
            <h3>RentAcaR.com</h3>
            <p>35, Adyar Main Road,<br>Madhya Kailash, <br> Chennai.<br><br>
                <span class="material-icons" style="font-size: 16px;">call</span> <a href="callto:+919432112345" >+91 94321 12345</a><br>
                <span class="material-icons" style="font-size: 16px;">email</span><a href="mailto: hmb@email.com" >rentacar@email.com</a><br>
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
<script src="main.js">
</script>
</body>
</html>
