<?php
session_start();
$params = json_decode(file_get_contents('php://input'));


$old=$params->old;
$new=$params->newpwd;
$user=$params->contact;


$mysqli=mysqli_connect('localhost','root','password','stealth');

$query = "SELECT * FROM `users` WHERE `contact` = '$user' AND `password` = '$old';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

if($num_row==0)
{
    echo 2;
    die();
}

$query = "UPDATE `users` SET `password` = '$new' WHERE `contact` = '$user';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

echo 1;
?>