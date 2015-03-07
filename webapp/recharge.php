<?php
session_start();
$params = json_decode(file_get_contents('php://input'));


$contact=$params->number;
$amount=$params->amount;


$mysqli=mysqli_connect('localhost','root','password','stealth');

$query = "UPDATE `account` SET `amount` = amount + '$amount' WHERE `user` = '$contact';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
if($result)
    echo 1;

else
    echo 0;

$query="INSERT INTO `cash` (`date`, `amount`, `user`, `comment`)
VALUES (CURDATE(), '$amount', '$contact', 'recharge');";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

    $system=$_SESSION['system'];
    $contact1=$_SESSION['contact'];
    $query="INSERT INTO `log` (`time`, `user`, `action`, `system`)
    VALUES (date(now()), '$contact1', '$amount $contact', '$system');";
    $result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
?>
