<?php
session_start();
if (isset($_SESSION['uname'])) {
    header("Location: main.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url("bg.jpg");
            background-size: cover;
            background-attachment: fixed;
        }
        .navbar {
            padding: .8rem;
        }

        .navbar-nav li {
            padding-right: 20px;
        }

        .nav-link {
            font-size: 1.1rem !important;
        }

        .navbar-brand {
            font-family: "Brush Script MT", cursive;
            letter-spacing: 3px;

        }

        .wrapper{
            margin: 80px;
        }
        .f1{
           
            max-width: 600Px;
            margin: 0 auto;
            padding:15px;
            margin: 1px solid #e5e5e5;
            background-color: #fff;
            border-radius: 10px;
        }
        ::placeholder{
        font-size: 1.1rem;
       }
    </style>
    
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <a href="#" class="navbar-brand">
            <h1>FlavorFrost</h1>
        </a>
        <button class="navbar-toggler">
            <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#nav1"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Login</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="login.php">User</a>
                        <a class="dropdown-item" href="login1.php">Admin</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Register</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="register.php">User</a>
                        <a class="dropdown-item" href="register1.php">Admin</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<?php

if(isset($_POST['login'])){ 
   
    $con=new mysqli("localhost","root","","restaurant");
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $sql="select * from admins where email='$email'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)===1){
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if($row['email']===$email && $row['pswd']===$pwd){
            $_SESSION['uname'] = $row['name'];
            header("Location:main.php");
            exit();
        }
        else{
            echo "<div class='alert alert-danger'>Invalid username or password</div>";
        }
    }
    else{
        echo "<div class='alert alert-danger'>Email doesn't exist</div>";
    }

}
?>
    <div class="wrapper">
    <form class="f1" method="POST" action="#">
        <h2 class="text-center mb-3">Admin Login</h2>
        <div class="form-group">
            <input class="form-control mb-2" type="text" id="email" name="email" placeholder="Enter Email Id" required autofocus>
        </div>
        <div class="form-group">
          <input class="form-control mb-3" type="password" id="pwd" name="pwd" placeholder="Enter Password" required autofocus>
        </div>
        <div class="form-group">
         <input type="submit" value="Login" name="login" id="login" class="btn btn-primary py-3 px-5">
        </div>
        <p class="text-center">For Register <a href="register1.php">Click Here.</a> </p>
    </form>
    </div>
</body>
</html>