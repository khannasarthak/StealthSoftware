<?php
session_start();
unset($_SESSION['user_name']);
$contact=$_SESSION['contact'];
$system=$_SESSION['system'];
$mysqli=mysqli_connect('localhost','root','','stealth');
$query="DELETE FROM `loggedon` WHERE `user` = '$contact';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

$query="UPDATE `systems` SET `loggedIn` = '0' WHERE `number` = '$system';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$query="INSERT INTO `log` (`time`, `user`, `action`, `system`)
VALUES (now(), '$contact', 'LoggedOut', '$system');";
header('Location: index.php');
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
?>