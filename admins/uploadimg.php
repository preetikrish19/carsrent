<?php
//print_r($_FILES);
$fileName = $_FILES['image']['name'];
$fileType = $_FILES['image']['type'];
$fileError = $_FILES['image']['error'];
$fileContent = $_FILES['image']['tmp_name'];
$folder = "img/". $fileName;

if(move_uploaded_file($fileContent, $folder)){
//Processes your file here
    echo "SUCCESS";
}else{
    echo $fileError;
}