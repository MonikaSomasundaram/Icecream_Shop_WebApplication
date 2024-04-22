<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: login1.php?msg=<p class='error'>please login here</p>");
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
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
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
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-light navbar-dark bg-dark sticky-top">
    <a href="#" class="navbar-brand">
      <h1>FlavorFrost</h1>
    </a>
    <button class="navbar-toggler">
      <span class="navbar-toggler-icon" data-toggle="collapse" data-target="#nav1"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav1">
      <ul class="navbar-nav nav-pills ml-auto"  role="tablist">
        <?php if (isset($_SESSION['uname'])) { ?>
          <li class="nav-item" style="color:white;">
            <h2><?php echo $_SESSION['uname']; ?></h2>
          </li>
        <?php } else {
          echo "Session 'uname' is not set."; // Debug statement
        } ?>
        <li class="nav-item"><a class="nav-link"  href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link"  href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>

    <!--add-->
    <div class="container mt-5" id="additem">
      <h2>Add Food Item</h2>
      <form enctype="multipart/form-data" action="#" method="post">
        <div class="form-group">
          <label for="foodName">Food Name</label>
          <input type="text" class="form-control" name="foodname" placeholder="Enter the food name" required>
        </div>

        <div class="form-group">
          <label for="category">Flavour</label>
          <select class="form-control" name="category">
            <option value="icecream sandwich">Vanilla</option>
            <option value="icecream bar">Chocolate</option>
            <option value="icrecream scoop">Strawberry</option>
            <option value="family pack">Butterscotch</option>
            <option value="family pack">Others</option>
          </select>
        </div>

        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" name="price" placeholder="Enter the price" required>
        </div>

        <div class="form-group">
          <label for="image">Food Image</label>
          <input type="file" class="form-control-file" name="image">
        </div>

        <button type="submit" class="btn btn-primary" name="addicecream">Add Food</button>
      </form>

      <br>
      <!--insert-->
      <?php
      if (isset($_POST['addicecream'])) {

        $con = mysqli_connect("localhost", "root", "", "restaurant");
        $name = $_POST['foodname'];
        $cat = $_POST['category'];
        $price = $_POST['price'];
        $img = $_FILES['image']['name'];
        $temp_img = $_FILES['image']['tmp_name'];
        $img_folder = 'img/' . $img;
        $sql = "insert into icecream values('$name','$cat','$img_folder','$price','')";
        if (move_uploaded_file($temp_img, $img_folder) and $con->query($sql)) {
          echo "<div class='alert alert-success'>Added successfully</div>";
        } else
          echo "<div class='alert alert-danger'>unsuccessful</div>";
      }
      ?>
    </div>
    <!--show-->
    <div class="container" id="view">
      <table class="table table-bordered ">

        <tr>
          <th>Name</th>
          <th>Flavour</th>
          <th>Image</th>
          <th>Price</th>
          <th>ID</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "restaurant");
        $sql = "SELECT * FROM icecream";
        $retval = mysqli_query($conn, $sql);
        if (mysqli_num_rows($retval) > 0) {
          while ($row = mysqli_fetch_assoc($retval)) {
        ?>
            <tr>
              <td><?php echo $row['icename']; ?></td>
              <td><?php echo $row['type']; ?></td>
              <td><img src="<?php echo $row['image']; ?>" style="width:200px; height:150px"></td>
              <td><?php echo $row['price']; ?></td>
              <td><?php echo $row['id']; ?></td>
            </tr>
        <?php
          } //end of while
        } else {
          echo "0 results";
        }
        mysqli_close($conn);
        ?>
      </table>
    </div>


    <!--edit-->
    <div class="container" id="edit">
      <table class="table table-bordered ">

        <tr>
          <th>Name</th>
          <th>Flavour</th>
          <th>Image</th>
          <th>Price</th>
          <th>Id</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "restaurant");
        $sql = "SELECT * FROM icecream";
        $retval = mysqli_query($conn, $sql);
        if (mysqli_num_rows($retval) > 0) {
          while ($row = mysqli_fetch_assoc($retval)) {
        ?>
            <tr>
              <td><?php echo $row['icename']; ?></td>
              <td><?php echo $row['type']; ?></td>
              <td><img src="<?php echo $row['image']; ?>" style="width:200px; height:150px"></td>
              <td><?php echo $row['price']; ?></td>
              <td><?php echo $row['id']; ?></td>
              <td>
                <a href="update.php?up_id=<?php echo $row['id']; ?>" class="btn btn-primary">update</a>
                <br><br>
                <form method="POST">
                  <input type="hidden" name="item_id" value="<?php echo $row['id']; ?>">
                  <input type="submit" name="remove" value="Remove" class="btn btn-danger">
                </form>
              </td>
            </tr>
        <?php
          } //end of while
        } else {
          echo "0 results";
        }
        mysqli_close($conn);
        ?>
      </table>


      <!--remove-->
      <?php
      $conn = mysqli_connect("localhost", "root", "", "restaurant");
      if (isset($_POST['remove'])) {
        $item_id = $_POST['item_id'];

        // Remove the item from the database
        $delete_sql = "DELETE FROM icecream WHERE id=$item_id";
        if ($conn->query($delete_sql) === TRUE) {

          echo "Item removed from the database.";
        } else {
          echo "Error removing item from the database: " . $conn->error;
        }
      }
      ?>

    </div>

</body>

</html>