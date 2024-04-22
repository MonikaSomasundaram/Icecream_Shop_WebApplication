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

            background-image: url("bg2.jpg");
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
        
        .admin-form,.user-form{ 
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
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
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
    if(isset($_POST['regascus'])){
    $con=new mysqli("localhost","root","","restaurant");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $ph=$_POST['phone'];
    $pwd=$_POST['password'];
    $rpwd=$_POST['rpassword'];
    
    $errors=array();
    if(empty($name) OR empty($email) OR empty($ph) OR empty($pwd) OR empty($rpwd)){
      array_push($errors,"All fields are required");
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
      array_push($errors,"Email is not valid");
    }
    if($pwd!==$rpwd){
      array_push($errors,"Password does not match");
    }
    $sql="select * from user where email='$email'";
    $result=mysqli_query($con,$sql);
    $row_count=mysqli_num_rows($result);
    if($row_count>0){
      array_push($errors,"email already exists");
    }
    if(count($errors)>0){
      foreach($errors as $error){
        echo "<div class='alert alert-danger'>$error</div>";
      }
    }
    else{
      $sql1="insert into user values('$name','$email','$ph','$pwd','$rpwd')";
      $final=$con->query($sql1);
      if($final==true){
      echo "<div class='alert alert-danger'>You are registered successful! Login to continue</div>";
      }
      else
      echo "<div class='alert alert-danger'>Regitration unsuccessful</div>";
      }
    }
     ?>
    <div class="container-fluid">
    <br>
    <div class="user">
    <form action="#" method="POST" class="user-form">
        <h2 class="text-center mb-3">User Registeration</h2>
        <div class="form-group">
          <input type="text" name="name" class="form-control" required="" placeholder="Your Name">
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" required="" placeholder="Your Email">
        </div>
        <div class="form-group">
          <input type="text" name="phone" class="form-control" required="" placeholder="Your Phone">
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" required="" placeholder="Your Password">
        </div>
        <div class="form-group">
          <input type="password" name="rpassword" class="form-control" required="" placeholder="Repeat Password">
        </div>
        <div class="form-group">
          <input type="submit" value="Register" name="regascus" class="btn btn-primary py-3 px-5">
        </div>
        <p class="text-center">For Login <a href="login.php">Click Here</a> </p>
      </form>
      
    </div>


</div>
</body>
</html>