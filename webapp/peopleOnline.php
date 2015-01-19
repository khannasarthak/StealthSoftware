<?php 

$mysqli=mysqli_connect('localhost','root','','stealth');
$query = "SELECT COUNT(`user`) AS count FROM `loggedon`";
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