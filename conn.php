<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'restaurant';
$con = mysqli_connect($host, $user, $pass,$dbname);
if(!$con){
die('Could not connect: '.mysqli_connect_error());
}
echo 'Connected successfully<br/>';
?>