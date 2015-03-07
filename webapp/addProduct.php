<?php
session_start();

$params = json_decode(file_get_contents('php://input'));


$product=$params->name;
$price=$params->price;



$mysqli=mysqli_connect('localhost','root','password','stealth');
$query = "INSERT INTO `products` (`name`, `price`)
VALUES ('$product', '$price')";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

if($result)
    echo 1;


 $contact1=$_SESSION['contact'];
   $system=$_SESSION['system'];
   $query="INSERT INTO `log` (`time`, `user`, `action`, `system`)
   VALUES (date(now()), '$contact1', 'created product with $product price $price', '$system');";
   $result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
?>
