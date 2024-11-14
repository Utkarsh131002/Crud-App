<?php
$server = "localhost";
$username = "root";
$password = "uttu";
$dbname = "mydb";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(!$conn){
    die("unsucssfull". mysqli_connect_error() );
}

