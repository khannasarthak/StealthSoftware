<?php
session_start();
unset($_SESSION['user_name']);
$contact=$_SESSION['contact'];
$mysqli=mysqli_connect('localhost','root','','stealth');
$query="UPDATE `users` SET `loggedOn` = '0' WHERE `users`.`contact` = '$contact'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
header('Location: index.php');
?>