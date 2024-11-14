<?php

$server = "localhost";
$username = "root";
$password = "uttu";
$dbName = "mydb";


$conn = mysqli_connect($server,$username,$password,$dbName);
if(!$conn){
    die("connection failed". mysqli_connect_error());
}
echo "successfully <pre>";
$sql = "select * from myguests";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    while($row  = mysqli_fetch_assoc($result)){
        echo $row["id"]. " " . $row["firstname"] . " ". $row["email"] . " ". $row["message"];
    }
}

?>