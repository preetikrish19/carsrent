<!DOCTYPE html>
<html lang="en">
<head>
    <title>New Passenger?</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center" >
    <nav class="navbar navbar-expand-md navbar-dark">

        <a class="navbar-brand btn btn-dark btn-lg" href="index.php" ><h1>HMB</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto pd-2">
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-dark btn-lg" href="driverlogin.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    <p id="error" class="text-white text-center bg-danger"></p>
    <p id="success" class="text-white text-center bg-success"></p>
    <div class="container">
        <div class="col-md-6 mx-auto card p-4">
            <form>
                <div class="form-group">
                    <label for="email">Driver Email ID:</label>
                    <input type="text" class="form-control" placeholder="Enter your email id" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" id="name" name="name">
                 </div>              
                <div class="form-group">
                    <label for="car_name">CAR NAME</label>
                    <input type="text" id="car_name" class="form-control" name="car_name">
                </div>
                <div class="form-group">
                    <label for="car_type">CAR TYPE</label>
                    <input type="text" id="car_type" class="form-control" name="car_type">
                </div>
                <div class="form-group">
                    <label for="numplate">NUMBER PLATE</label>
                    <input type="text" id="numplate" class="form-control" name="numplate">
                </div>
                <div class="form-group">
                    <label for="loc">LOCATION</label>
                    <input type="text" id="loc" class="form-control" name="loc">
                </div>                <div class="form-group">
                    <label for="passwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="passwd" name="passwd">
                </div>
                <div class="form-group">
                    <label for="passwd">Reenter Password</label>
                    <input type="password" class="form-control" placeholder="Reenter password" id="repass" name="repass">
                </div>
                <button type="button" class="btn btn-primary submit" name="submit" onclick="addUser()">Sign Up</button>
                <a type="button" class="btn btn-success submit" href="driverlogin.php" >Login Existing Driver</a>
            </form>
        </div>
    </div>
</div>
<script>
    var user= $('#name');
    var email = $('#email');
    var passwd = $('#passwd');
    var repwd = $('#repass');
    var car_type = $('#car_type');
    var car_name = $('#car_name');
    var loc = $('#loc');
    var numplate= $('#numplate');
    var error = $('#error');
    var success = $('#success');

    function addUser(){

        if(!(user.val() && email.val() && passwd.val() && repwd.val())){
            error.html("Please fill all the data");
        } else {
            if(passwd.val() !== repwd.val()){
                error.html("Passwords do not match.");
            }else{
                $.post('admins/adddriver.php', {
                    name: user.val(),
                    email: email.val(),
                    passwd: passwd.val(),
                    car_name: car_name.val(),
                    loc: loc.val(),
                    numplate: numplate.val(),
                    car_type: car_type.val(),
                      }, function (result){
                    if(result==='SUCCESS'){
                        error.empty();
                        success.html("User Added, Proceed to login.");
                        alert(result);
                        window.location.href='driverlogin.php'
                    }else{
                        error.html(result);
                    }
                })
            }
        }
    }
</script>

</body>
</html>
