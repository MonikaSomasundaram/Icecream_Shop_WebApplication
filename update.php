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
</head>

<body>
    <?php 

    
    $conn = mysqli_connect("localhost", "root", "", "restaurant");
    $id = $_GET['up_id'];
    $sql = "SELECT * FROM icecream where id='" . $id . "'";
    $retval = mysqli_query($conn, $sql);
    if (mysqli_num_rows($retval) > 0) {
        while ($row = mysqli_fetch_assoc($retval)) {
    ?>
            <div class="container mt-5" id="updateitem">
                <form enctype="multipart/form-data" action="#" method="post">
                    <div class="form-group">
                        <label for="foodName">Name</label>
                        <input type="text" class="form-control" name="foodname" placeholder="Enter the food name" value="<?php echo $row['icename']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="category">Flavour</label>
                        <select class="form-control" name="category"> value="<?php echo $row['type']; ?>"
                            <option value="icecream sandwich">Vanilla</option>
                            <option value="icecream bar">Chocolate</option>
                            <option value="icrecream scoop">Strawberry</option>
                            <option value="family pack">Butterscotch</option>
                            <option value="family pack">Others</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" value="<?php echo $row['price']; ?>" placeholder="Enter the price" required>
                    </div>

                    <div class="form-group">
                        <label for="folderName">Image Folder Name:</label>
                        <input type="text" name="folderName" lass="form-control-file" value="<?php echo $row['image']; ?>" disabled><br>
                        <img src="<?php echo $row['image']; ?>" style="width:200px; height:150px">
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary" name="up_icecream">Update</button>
                </form>
            </div>
    <?php
        }
    }
    ?>

<?php
  if (isset($_POST['up_icecream'])) {
    $con = mysqli_connect("localhost", "root", "", "restaurant");
    $id = $_GET['up_id'];
    $name = $_POST['foodname'];
    $cat = $_POST['category'];
    $price = $_POST['price'];
    $img = $_FILES['image']['name'];
    $temp_img = $_FILES['image']['tmp_name'];
    $img_folder = 'img/' . $img;
    $sql1 = "update icecream set icename='$name',type='$cat',image='$img_folder',price='$price' where id='".$id."'";
    if (move_uploaded_file($temp_img, $img_folder) and $con->query($sql1)) {
      echo "<div class='alert alert-success'>Updated successfully</div>";
    } else
      echo "<div class='alert alert-danger'> update unsuccessful</div>";
  }
  ?>
</body>

</html>