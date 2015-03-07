<?php
session_start();
$params = json_decode(file_get_contents('php://input'));


$name=$params->name;


$mysqli=mysqli_connect('localhost','root','password','stealth');
$query = "DELETE FROM `products`
WHERE (`name` = '$name');";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
if($result)
    echo 1;

  $contact=$_SESSION['contact'];
  $system=$_SESSION['system'];
   $query="INSERT INTO `log` (`time`, `user`, `action`, `system`)
  VALUES (date(now()), '$contact', 'delete product $name', '$system');";
  $result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
?>
