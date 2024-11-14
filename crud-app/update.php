<?php

include 'conect.php';

$id = $_GET['updateid'];

$sql ="select * from users where id =$id";
$result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $pasword = $row['password'];



if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update users set id = $id,name='$name',
    email='$email',mobile='$mobile',password='$password'
    where id=$id";

    
    if(mysqli_query($conn, $sql)){
       // header('location:display.php');
       echo "success";
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
    placeholder="Enter Your Name" autocomplete="off" value=<?php echo $name ?>>
    </div>

    <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="Email" class="form-control" name="email"
    placeholder="Enter Your Email" autocomplete="off" value=<?php echo $email ?>>
    </div>

    <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control" name="mobile"
    placeholder="Enter Your Mobile Number" autocomplete="off" value=<?php echo $mobile ?>>
    </div>

    <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" name="password"
    placeholder="Enter Your Password" autocomplete="off" value=<?php echo $password ?>>
    </div>


  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
  
</form>
</div>
</body>


