<?php

$params = json_decode(file_get_contents('php://input'));


$code=$params->code;


$mysqli=mysqli_connect('localhost','root','password','stealth');
$query = "DELETE FROM `pricingmodels`
WHERE `code` = '$code';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
if($result)
    echo 1;
?>
