<?php 

$mysqli=mysqli_connect('localhost','root','password','stealth');
$query = "SELECT COUNT(`contact`) AS count FROM `users` WHERE `joindate` = CAST(curdate() AS char);";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			 echo $row['count'];
		}
		else{
			echo 'false';
		}
?>
