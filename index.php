<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
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

        .carousel-inner img {
            height: 50% !important;
            width: 100%;
        }

        .slideInUp {
            animation-name: slideInUp;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
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

    <div class="carousel slide" data-ride="carousel" id="demo">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="ice1.jpg" alt="slide 1">

            </div>
            <div class="carousel-item">
                <img src="ice2.jpg" alt="slide 2">
            </div>
            <div class="carousel-item active">
                <img src="ice3.jpg" alt="slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="font-size: 75px; font-family: Brush Script MT, cursive;letter-spacing: 2px;">Discover a world of delightful flavors</h5>
                </div>
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
    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid">
            <h1 style="text-align:center; font-size:70px; line-height:80px; font-weight:400; letter-spacing:1px;">Do you know how<br> pleasure tastes?</h1><br>
            <div class="d-flex justify-content-center">
                <a href="login.php" class="btn btn-dark" role="button">Get started</a>
            </div>
        </div>
    </div>
    <br><br>
    <h1 style="text-align:center;font-size: 50px;line-height: 50px;font-weight: 400;letter-spacing: 1px;">Choose Your Favourite One</h1>
    <br><br>
    <!-- Featured Ice Creams Section with hover animation -->
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card animated fadeIn">
                    <img src="chocolate-ice-cream.jpg" class="card-img-top" alt="Ice Cream Flavor 1" style="height:300px;">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate Delight</h5>
                        <p class="card-text">Indulge in the rich and creamy taste of our chocolate ice cream.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animated fadeIn">
                    <img src="IMG_7742.jpg" class="card-img-top" alt="Ice Cream Flavor 2" style="height:300px;">
                    <div class="card-body">
                        <h5 class="card-title">Strawberry Bliss</h5>
                        <p class="card-text">Experience the sweetness of fresh strawberries in every bite.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animated fadeIn">
                    <img src="vanilla.jpg" class="card-img-top" alt="Ice Cream Flavor 3" style="height:300px;">
                    <div class="card-body">
                        <h5 class="card-title">Vanilla Dream</h5>
                        <p class="card-text">A classic favorite with a smooth and creamy vanilla flavor.</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-4">
                <div class="card animated fadeIn">
                    <img src="caramel-ice-cream.jpg" class="card-img-top" alt="Ice Cream Flavor 1" style="height:300px;">
                    <div class="card-body">
                        <h5 class="card-title">Caramel Ice Cream</h5>
                        <p class="card-text">A heavenly blend of rich caramel and chunks of chocolate swirls.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animated fadeIn">
                    <img src="blueberry.jpg" class="card-img-top" alt="Ice Cream Flavor 3" style="height:300px;">
                    <div class="card-body">
                        <h5 class="card-title">Blueberry Ice Cream</h5>
                        <p class="card-text">A playful mix of fruity jello and creamy ice cream.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card animated fadeIn">
                    <img src="Ice-Cream-Jello.jpg" class="card-img-top" alt="Ice Cream Flavor 2" style="height:300px;">
                    <div class="card-body">
                        <h5 class="card-title">Jello Mello Ice Cream</h5>
                        <p class="card-text">Creamy cheesecake-flavored ice cream swirled with juicy blueberry ribbons.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br><br>
    <!--footer-->

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