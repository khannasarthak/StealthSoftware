<?php

$params = json_decode(file_get_contents('php://input'));


$contact=$params->number;


$mysqli=mysqli_connect('localhost','root','password','stealth');
$query = "SELECT COUNT(`contact`) AS 'count' FROM `users` WHERE `contact` = '$contact'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

$row=mysqli_fetch_array($result);

echo $row['count'];


?>
