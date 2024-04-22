<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Your Ice Cream Shop</title>
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

        body {
            background-image: url('bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .card-blur {
            backdrop-filter: blur(1px);
            /* Adjust the blur intensity as needed */
            background-color: rgba(240, 240, 240, 0.2);
            /* Adjust the background opacity as needed */
            border: 1px solid #ccc;
            /* Add a 1px solid border with a light gray color */
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            /* Add a shadow (adjust values as needed) */
            color: #333;
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
    <!-- Include your header/navigation bar here -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-blur">
                    <div class="card-body">
                        <h2 class="card-title">About FlavorFrost</h2>
                        <p class="card-text">
                            Welcome to FlavorFrost, where we believe in the power of ice cream to make people happy. Our journey started back in 2003 when our founder,James Bond, decided to turn her passion for crafting unique ice cream flavors into a business.
                        </p>
                        <p class="card-text">
                            Since then, we've been committed to using the finest, locally sourced ingredients to create delicious and one-of-a-kind ice cream creations. We take pride in our dedication to quality and flavors that delight your taste buds.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <img src="shop.webp" class="card-img-top" alt="Ice Cream Shop" style="height:300px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card card-blur">
            <div class="card-body">
                <h2 class="card-title">Our Mission</h2>
                <p class="card-text">
                    Our mission is simple: to provide our customers with the most delectable and memorable ice cream experiences. We aim to create an atmosphere where friends and family can come together to enjoy a sweet treat, create lasting memories, and leave with smiles on their faces.
                </p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="card card-blur">
            <div class="card-body">
                <h2 class="card-title">Our Values</h2>
                <p class="card-text">
                    Quality: We never compromise on the quality of our ingredients and products.<br>
                    Creativity: We're constantly experimenting with new flavors and combinations.<br>
                    Community: We're proud to be a part of this community and give back whenever we can.<br>
                    Sustainability: We're committed to environmentally responsible practices.
                </p>
            </div>
        </div>
    </div>
    <br>

    <!-- Include your footer here -->

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
    <!-- Include your JavaScript and jQuery scripts here, if necessary -->
</body>

</html>