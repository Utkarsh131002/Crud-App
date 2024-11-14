<?php

include 'conect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into users  (name,email,mobile,password)
    values('$name', '$email', '$mobile', '$password')";

    
    if(mysqli_query($conn, $sql)){
        header('location:display.php');
    }
    else{
        die(mysqli_connect_errno());
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with Bootstrap</title>
    
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
 rel="stylesheet">
 <title>Crud Operation</title>
</head>
<body>
 <div class="container my-5">
 <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name"
    placeholder="Enter Your Name" autocomplete="off">
    </div>

    <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="Email" class="form-control" name="email"
    placeholder="Enter Your Email" autocomplete="off">
    </div>

    <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control" name="mobile"
    placeholder="Enter Your Mobile Number" autocomplete="off">
    </div>

    <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" name="password"
    placeholder="Enter Your Password" autocomplete="off">
    </div>


  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
  
</form>
</div>
</body>


