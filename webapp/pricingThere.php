<?php 

$contact=$_POST['number'];
$mysqli=mysqli_connect('localhost','root','password','stealth');
$query = "SELECT COUNT(`user`) AS count FROM `pricingplan` WHERE `user` = $contact";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

$row=mysqli_fetch_array($result);

echo $row['count'];
		
?>
