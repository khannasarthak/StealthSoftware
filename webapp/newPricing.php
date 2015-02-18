<?php

$params = json_decode(file_get_contents('php://input'));


$cost=$params->cost;
$cycle=$params->cycle;
$period=$params->period;

$code=$cost.strtoupper($cycle[0]).$period;


$mysqli=mysqli_connect('localhost','root','password','stealth');
$query = "INSERT INTO `pricingmodels` (`code`, `amount`, `cycle`, `timevalue`)
VALUES ('$code', '$cost', '$cycle', '$period');";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
if($result)
    echo 1;

  //  $contact=$_SESSION['contact'];
  //  $system=$_SESSION['system'];
  //  $query="INSERT INTO `log` (`time`, `user`, `action`, `system`)
  //  VALUES (date(now()), '$contact', 'created pricing code $code', '$system');";
  //  $result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
?>
