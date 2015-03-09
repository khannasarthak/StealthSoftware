<?php 
$params = json_decode(file_get_contents('php://input'));


$contact=$params->number;
$code=$params->code;
$option=$params->option;

if($option==1)
{$query = "INSERT INTO `pricingplan` (`plan`, `user`)
VALUES ('$code', '$contact') ON DUPLICATE KEY UPDATE `plan` = '$code',`user` = '$contact'";}



$mysqli=mysqli_connect('localhost','root','password','stealth');

$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

echo 1;
?>
