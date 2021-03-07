<?php
session_start();
if(isset($_SESSION['admin'])){

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Add Cars - Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="jumbotron text-center">
        <h1>Add a CAR: CARS RENTAL</h1>
        <a type="button" class="btn btn-warning submit" href="index.php" >Home</a>
    </div>

    <div class="container">
        <h2 class="text-center">Admin Login</h2>
        <p id="error" class="text-white text-center bg-danger"></p>
        <p id="success" class="text-white text-center bg-success"></p>
        <div class="container">
            <div class="col-md-6 mx-auto card p-4">
                <form>
                    <div>
                        <div class="form-group">
                            <label for="carname">Car Name:</label>
                            <input type="text" class="form-control" id="carname" name="carname">
                        </div>
                        <div class="form-group">
                            <label for="image">Image of Car:</label>
                            <input type="file" class="form-control" id="carimg" name="carimg">
                        </div>
                        <div class="form-group">
                            <label for="numplate">Number Plate:</label>
                            <input type="text" class="form-control" id="numplate" name="numplate">
                        </div>
                        <div class="form-group">
                            <label for="usr">Name:</label>
                            <input type="text" class="form-control" id="usr">
                        </div>
                        <div class="form-group">
                            <label for="usr">Name:</label>
                            <input type="text" class="form-control" id="usr">
                        </div>


                    </div>

                    <button type="button" class="btn btn-primary submit" name="login" onclick="verifyLogin()">Login</button>
                </form>
            </div>
        </div>
    </div>

    </body>
    <script>
        function verifyLogin(){
            var email = $('#email');
            var pwd = $('#password');
            var error = $('#error');
            var success = $('#success');
            if(!(pwd.val() && email.val())){
                error.html("Please fill all the data");
            }else{
                $.post('loginadmin.php', {
                    email: email.val(),
                    pwd: pwd.val()
                }, function (result){
                    if(result==='SUCCESS'){
                        error.empty();
                        success.html("User Logged in");
                        alert(result);
                        window.location.href='index.php'
                    }else{
                        error.html(result);
                    }
                })
            }
        }
    </script>
    </html>

<?php
}
else{
    header("location:index.php");
}
