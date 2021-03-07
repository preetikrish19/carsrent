<?php
session_start();
if(isset($_SESSION['admin'])){

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Update Rentals - Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="jumbotron text-center">
        <nav class="navbar navbar-expand-md navbar-dark">

            <a class="navbar-brand btn btn-dark btn-lg" href="index.php" ><h1>RentACar.com</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto pd-2">
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark btn-lg" href="viewcars.php">View All Cars</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-dark btn-lg" href="addcars.php">Add A New Car</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn btn-dark btn-lg" href="updaterentals.php">View Rentals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark btn-lg" href="logout.php">Logout</a>

                    </li>
                </ul>
            </div>
        </nav>
        <h1>Rentals: Admin</h1>
    </div>

    <div class="container">
        <div></div>
    </div>

    </body>
    <script>

    </script>
    </html>


<?php
}else{
    header('location:index.php');
}