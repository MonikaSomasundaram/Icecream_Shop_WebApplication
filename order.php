<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: login.php?msg=<p class='error'>please login here</p>");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Ice Cream</title>
    <!-- Include Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         .f1{ 
           max-width: 600Px;
           margin: 0 auto;
           padding:15px;
           margin: 1px solid #e5e5e5;
           background-color: grey;
           border-radius: 10px;
           position:relative;
           left:55%;
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
    .navbar-brand{
            font-family: "Brush Script MT", cursive;
            letter-spacing: 3px;
           
        }
    </style>
</head>
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
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4" style="text-align:center;">Order Ice Cream</h1>
        <div class="row">
            <div class="col-md-6">
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Handle the form submission here
                    $iceCreamId = $_POST['ice_cream_id'];
                    $quantity = $_POST['quantity'];

    
                    $conn = new mysqli('localhost', 'root', '', 'restaurant');

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "INSERT INTO orders (ice_cream_id, quantity) VALUES ($iceCreamId, $quantity)";
                    if ($conn->query($sql) === true) {
                        echo '<div class="alert alert-success" role="alert">Your order has been placed successfully!</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
                    }

                    $conn->close();
                } else {
                    // Display the order form
                    $iceCreamId = $_GET['ice'];
           
                    $conn = new mysqli('localhost', 'root', '', 'restaurant');

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Retrieve ice cream item details from the database
                    $sql = "SELECT * FROM icecream WHERE id = $iceCreamId ";
                    $result = $conn->query($sql);

                    if ($result->num_rows == 1) {
                        $row = $result->fetch_assoc();
                        ?>
                        <form class="f1" method="post" class="mb-4">
                            <input type="hidden" name="ice_cream_id" value="<?php echo $row['id']; ?>">
                            <h3><?php echo $row['icename']; ?></h3>
                            <p>Flavour: <?php echo $row['type']; ?></p>
                            <p>Price: <?php echo $row['price']; ?></p>
                            <div class="form-group">
                                <label for="quantity">Quantity:</label>
                                <input type="number" name="quantity" id="quantity" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Place Order</button>
                        </form>
                        <?php
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Ice cream item not found.</div>';
                    }

                    $conn->close();
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap 4 JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
