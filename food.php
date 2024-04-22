<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: login.php?msg=<p class='error'>please login here</p>");
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
</head>
<style>
    body{
        background-color: #1C252A;
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

    .carousel-inner img {
        height: 50% !important;
        width: 100%;
    }

    /* Define a hover effect for cards */
    .card {
            transition: transform 0.3s; /* Smooth transition effect on hover */
        }
        .card:hover {
            transform: scale(1.05); /* Scale the card by 5% on hover */
            background-color: #f0f0f0; /* Change the background color on hover */
        }


    .navbar-brand{
            font-family: "Brush Script MT", cursive;
            letter-spacing: 3px;
           
        }
        
.card {
width: 100%;
max-width: 300px;
margin:20px;
background-color: #fff;
padding: 20px;
border-radius: 4px;
box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
margin-bottom: 20px;
flex: 1;
height: 350px
}

.card img {
width: 100%;
height: 200px;
object-fit: cover;
border-radius: 2px;
margin-bottom: 2px;
}

.card h4 {
font-size: 20px;
margin-bottom: 5px;
}

.card p {
font-size: 14px;
margin-bottom: 5px;
}

.event-card a {
background-color: #2f2f2f;
color: #fff;
padding: 10px 20px;
font-size: 14px;
border-radius: 4px;
text-align: center;
text-decoration: none;
transition: background-color 0.3s;
display: block;
}

    
</style>

<body>
    <nav class="navbar navbar-expand-sm bg-light navbar-dark bg-dark sticky-top">
        <a href="#" class="navbar-brand"><h1>FlavorFrost</h1></a>
        <button class="navbar-toggler">
            <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#nav1"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav1">
            <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['uname'])) { ?>
    <li class="nav-item" style="color:white;">
        <h2><?php echo $_SESSION['uname']; ?></h2>
    </li>
<?php } else {
    echo "Session 'uname' is not set."; // Debug statement
} ?>
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Flavours</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Vanilla</a>
                        <a class="dropdown-item" href="#">Chocolate</a>
                        <a class="dropdown-item" href="#">Butterscotch</a>
                        <a class="dropdown-item" href="#">Pista</a>
                        <a class="dropdown-item" href="#">Strawberry</a>
                        <a class="dropdown-item" href="#">Others</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    <div class="carousel slide" data-ride="carousel" id="demo">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="ice1.jpg" alt="slide 1">
            </div>
            <div class="carousel-item">
                <img src="ice3.jpg" alt="slide 2">
            </div>
            <div class="carousel-item">
                <img src="ice4.jpg" alt="slide 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br><br>

    <h1 style="text-align:center;font-size: 50px;line-height: 50px;font-weight: 400;letter-spacing: 1px; color:#fff;">We scream for ICECREAM!!</h1>
    <div class="container card-container">
        <!-- Card Deck to display items -->
     
        <div class="row card-row">
            <?php
            $conn = new mysqli('localhost','root','','restaurant');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql="select * from icecream";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-3">
                <div class="card mb-3" style="width:250px;">
               <?php $num=$row['id']; 
               $link = "order.php?ice=" . $num;
               ?>
             
                <a href="<?php echo $link; ?>">
                    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['icename']; ?>">
                </a>
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $row['icename']; ?></h4>
                        <p class="card-text">Flavour: <?php echo $row['type']; ?></p>
                        <p class="text-muted">Rs.<?php echo $row['price']; ?></p>
                    </div>
                </div>
            </div>
            <?php
                }
            } else {
                echo "No card details found in the database.";
            }

            // Close the database connection
            $conn->close();
            ?>
        </div>
      
    </div>
    <br>          
    <footer class="bg-dark text-white p-4">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h4>Contact Information</h4>
                    <p>
                        Address: N0.123, 4th Avenue, AnnaNagar, Chennai-101.
                        <br>
                        Phone: 9790087543,8795647867
                        <br>
                        Email: flavorfrost@gmail.com
                    </p>
                </div>
                <div class="col-md-3">
                    <h4>Follow Us</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="#" class="text-white"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Other branches</h4>
                    <ul>
                        <li>Mogappair</li>
                        <li>Guindy</li>
                        <li>Tambaram</li>
                        <li>Medavakkam</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p>&copy; FlavorFrost Ice Cream Shop</p>
            </div>
        </div>
    </footer>


</body>

</html>