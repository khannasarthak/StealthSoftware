<?php 

$params = json_decode(file_get_contents('php://input'));


$contact=$params->number;
$name=$params->name;
$pwd=$params->password;
$level=$params->level;


$mysqli=mysqli_connect('localhost','root','','stealth');
$query = "INSERT INTO `users` (`contact`, `uname`, `password`, `level`, `joindate`)
VALUES ('$contact', '$name', md5('$pwd'), '$level', curdate())";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
if($result)
    echo 1;
?>