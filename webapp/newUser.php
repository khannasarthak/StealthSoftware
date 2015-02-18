<?php

$params = json_decode(file_get_contents('php://input'));


$contact=$params->number;
$name=$params->name;
$pwd=$params->password;
$level=$params->level;


$mysqli=mysqli_connect('localhost','root','password','stealth');
$query = "INSERT INTO `users` (`contact`, `uname`, `password`, `level`, `joindate`)
VALUES ('$contact', '$name', md5('$pwd'), '$level', curdate())";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
if($result)
    echo 1;

$query = "INSERT INTO `account` (`user`, `amount`)
VALUES ('$contact', '0');";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

  //  $contact1=$_SESSION['contact'];
  //  $system=$_SESSION['system'];
  //  $query="INSERT INTO `log` (`time`, `user`, `action`, `system`)
  //  VALUES (date(now()), '$contact1', 'created user with '$contact' level '$level', '$system');";
  //  $result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
?>
