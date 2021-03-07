<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "cars1";

$con = new mysqli($host, $user, $password, $database);

if ($con->connect_error) {
    die("Connection failed");
}