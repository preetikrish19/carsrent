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
        <h1>Add a CAR: Admin</h1>
    </div>

    <div class="container">
        <h2 class="text-center">Details of Car: </h2>
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
                            <input type="file" class="form-control-file" id="carimg" name="carimg">
                        </div>
                        <div class="form-group">
                            <label for="numplate">Number Plate:</label>
                            <input type="text" class="form-control" id="numplate" name="numplate">
                        </div>
                        <div class="form-group">
                            <label for="driver">Driver Name:</label>
                            <input type="text" class="form-control" id="driver" name="driver">
                        </div>
                        <div class="form-group">
                            <label for="driverphone">Driver Phone:</label>
                            <input type="text" class="form-control" id="driverphone" name="driverphone">
                        </div>
                        <div class="form-group">
                            <label for="ppd">Price Per Day:</label>
                            <input type="number" class="form-control" id="ppd" name="ppd">
                        </div>
                        <div class="form-group">
                            <label for="ppkm">Price Per KM:</label>
                            <input type="number" class="form-control" id="ppkm" name="ppkm">
                        </div>
                        <div class="form-group">
                            <label for="loc">Location: </label>
                            <select class="form-control" id="loc">
                                <option value="guindy">Guindy</option>
                                <option value="chepauk">Chepauk</option>
                                <option value="ashoknagar">Ashok Nagar</option>
                                <option value="tambaram">Tambaram</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="size">Size: </label>
                            <select class="form-control" id="size">
                                <option value="micro">Micro</option>
                                <option value="mini">Mini</option>
                                <option value="suv">SUV</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="button" class="btn btn-primary submit" name="adddata" onclick="addcar()">add car</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>

    </body>
    <script>
        var carname = $('#carname');
        var image = $('#carimg')
        var numplate = $('#numplate')
        var driver = $('#driver');
        var driverphone = $('#driverphone');
        var ppd = $('#ppd');
        var ppkm = $('#ppkm');
        var loc = $('#loc');
        var size = $('#size');
        var error = $('#error');
        var success = $('#success');

        function addcar(){
            if (!(carname.val() && image.val() && numplate.val() && driver.val() && driverphone.val())){
                error.html('Please fill all data');
            }else{

                $.post('adddetails.php', {
                    carname: carname.val(),
                    image: image.val(),
                    numplate: numplate.val(),
                    driver: driver.val(),
                    phone: driverphone.val(),
                    ppd: ppd.val(),
                    ppkm: ppkm.val(),
                    loc: loc.val(),
                    size: size.val()
                }, function (result){
                    if(result==='SUCCESS'){
                        success.html("DATA ADDED SUCCESSFULLY");
                        alert('DATA ADDED SUCCESSFULLY');
                    }else{
                        error.html(result);
                    }
                })

            }


        }

        function addimage(){
            let msg='';
            var formData = new FormData();
            formData.append('image', image[0].files[0]);

            $.ajax({
                url : 'uploadimg.php',
                type : 'POST',
                data : formData,
                processData: false,  // tell jQuery not to process the data
                contentType: false,  // tell jQuery not to set contentType
                success : function(data) {

                    console.log(data);
                    if(data==='SUCCESSS'){
                        addcar();
                    }else{
                        error.html('IMAGE NOT UPLOADED');
                    }
                }
            });
        }
    </script>
    </html>

<?php
}
else{
    header("location:index.php");
}
