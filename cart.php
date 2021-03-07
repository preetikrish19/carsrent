<?php
session_start();
if(isset($_SESSION['userid'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart: Hotel Muruga Bhavan</title>
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

<body style="background: #FF9671">
<div class="container-fluid p-0">
<header>
    <div class="jumbotron text-white jumbotron-image shadow" >
        <nav class="navbar navbar-expand-md navbar-dark">

            <a class="navbar-brand btn btn-dark btn-lg" href="index.php" ><h1>HMB</h1></a>
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
            Cart - Hotel Muruga Bhavan
        </h1>
        <p class="push-spaces"></p>
    </div>
</header>

<div class="container">
    <h2 class="text-center">Cart Items</h2>
    <p>Hey <?php echo $_SESSION['username'];?>, here's your cart.</p><br>
    <div id="cart" class="text-white text-center bg-success"></div>
    <div id="data">
    </div>
    <h2 class="text-center">Previous Transactions</h2>
    <div id="txns">
    </div>
</div>
<footer class="mt-4">
    <div class="jumbotron text-center bg-dark text-light" style="margin-bottom:0" id="contact-us">
        <div class="row">
            <div class="col-lg-6">
                <h3>Hotel Muruga Bhavan</h3>
                <p>35, Adyar Main Road,<br>Madhya Kailash, <br> Chennai.<br><br>
                    <span class="material-icons" style="font-size: 16px;">call</span> <a href="callto:+919432112345" >+91 94321 12345</a><br>
                    <span class="material-icons" style="font-size: 16px;">email</span><a href="mailto: hmb@email.com" >hmb@email.com</a><br>
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
<script src="main.js"></script>
<script>
    var userid = Number(<?php echo $_SESSION['userid'];?>);
    window.onload = function () {
        getTable();
        getTxns();
    }
    function getTable() {
        $.post('admin/viewcart.php', {
            userid: userid
        }, function(result){
            $('#data').html(result);
        });

    }
    function deleteData(txnid){
        $.post('admin/deletecart.php', {
            txnid: txnid
        }, function (result){
            if(result==='SUCCESS'){
                getTable();
            }
        });

    }
    function getTxns(){
        $.post('admin/gettxns.php', {
            userid: userid
        }, function(result){
            $('#txns').html(result);
        });
    }
    function paynow(){
        $.post('admin/paynow.php',{
            userid: userid
        },function (result){
            $('#cart').html(result);
            getTable();
            getTxns();
        });
    }
</script>

</body>
</html>
<?php
}else{
    header('Location:login.php');
}