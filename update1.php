<?php
  if (isset($_POST['up_icecream'])) {
    $con = mysqli_connect("localhost", "root", "", "restaurant");
    $name = $_POST['foodname'];
    $cat = $_POST['category'];
    $price = $_POST['price'];
    $img = $_FILES['image']['name'];
    $temp_img = $_FILES['image']['tmp_name'];
    $img_folder = 'img/' . $img;
    $sql = "insert into icecream values('$name','$cat','$img_folder','$price','')";
    if (move_uploaded_file($temp_img, $img_folder) and $con->query($sql)) {
      echo "<div class='alert alert-success'>Updated successfully</div>";
    } else
      echo "<div class='alert alert-danger'> update unsuccessful</div>";
  }
  ?>