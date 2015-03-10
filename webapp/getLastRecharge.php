<?php 
$params = json_decode(file_get_contents('php://input'));


$contact=$params->number;

$mysqli=mysqli_connect('localhost','root','password','stealth');
$query = "SELECT `date` FROM `cash` WHERE `user` = '$contact' AND `comment` = 'recharge' ORDER BY `date` DESC LIMIT 1;";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			 echo $row['date'];
		}
		else{
			echo 'false';
		}
?>
