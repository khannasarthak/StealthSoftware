<?php
session_start();
$username = $_POST['number'];
$password = $_POST['pwd'];
$system=$_POST['system'];

$mysqli=mysqli_connect('localhost','root','password','stealth');

$query="SELECT `number` FROM `systems` WHERE `group` = '$system' AND `loggedIn` = '0' ORDER BY `number` LIMIT 1";

$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			$system=$row['number'];
            $_SESSION['system']=$system;
		}
		else{
			echo 'false';
		}



$query="INSERT INTO `stealth`.`loggedon` (`user`, `system`, `time`) VALUES ('$username', '$system', CURRENT_TIMESTAMP);";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$query = "SELECT `uname`,`level` FROM users WHERE contact='$username' AND password='$password'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			$_SESSION['user_name']=$row['uname'];
            $_SESSION['contact']=$username;
						$_SESSION['level']=$row['level'];

						echo $row['level'];
		}
		else{
			echo 'false';
		}
$query="INSERT INTO `log` (`time`, `user`, `action`, `system`)
VALUES (now(), '$username', 'LoggedIn', '$system');";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
?>
