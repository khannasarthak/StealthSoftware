<?php
session_start();
$username = $_POST['number'];
$password = $_POST['pwd'];
$mysqli=mysqli_connect('localhost','root','','stealth');
$query="UPDATE `users` SET `loggedOn` = '1' WHERE `users`.`contact` = '$username'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$query = "SELECT uname FROM users WHERE contact='$username' AND password='$password'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			$_SESSION['user_name']=$row['uname'];
            $_SESSION['contact']=$username;
			echo 1;
		}
		else{
			echo 'false';
		}
?>