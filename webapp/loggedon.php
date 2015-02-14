<?php 

$mysqli=mysqli_connect('localhost','root','password','stealth');
$query = "SELECT COUNT(*) AS loggedin FROM users WHERE loggedOn=1";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			 echo $row['loggedin'];
		}
		else{
			echo 'false';
		}
?>
