<?php
session_start();
unset($_SESSION['user_name']);
$contact=$_SESSION['contact'];
$system=$_SESSION['system'];

$mysqli=mysqli_connect('localhost','root','password','stealth');
$query="DELETE FROM `loggedon` WHERE `user` = '$contact';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

$query="UPDATE `systems` SET `loggedIn` = '0' WHERE `number` = '$system';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$query="INSERT INTO `log` (`time`, `user`, `action`, `system`)
VALUES (now(), '$contact', 'LoggedOut', '$system');";

$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));





$query="SELECT `amount`, `cycle`, `timevalue` FROM `pricingmodels` WHERE `code` = (SELECT `plan` FROM `pricingplan` WHERE `user` = '$contact' LIMIT 1) LIMIT 1;";

$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			$amt=$row['amount'];
            $cycle=$row['cycle'];
            $period=$row['timevalue'];
		}



switch($cycle){
case "month":
    $timeDiff=$timeDiff/2592000;
    break;

case "hour":
    $timeDiff=$timeDiff/3600;
    break;

case "day":
    $timeDiff=$timeDiff/86400;
    break;

case "week":
    $timeDiff=$timeDiff/604800;
    break;

case "year":
    $timeDiff=$timeDiff/31556926;
    break;

default: echo "Wrong Cycle Type";
}



$units=$timeDiff/$period;



$amount=$units*$amt;



$query="INSERT INTO `bills` (`time`, `user`, `amount`, `billedUnits`, `pricingCode`, `hours`) VALUES (curdate(), '$contact', ' $amount', '$units', (SELECT `plan` FROM `pricingplan` WHERE `user` = '$contact'), '$hours');";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

$query="INSERT INTO `log` (`time`, `user`, `action`, `system`)
VALUES (date(now()), '$contact', 'billed $amount', '$system');";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
session_unset();
session_destroy();
header('Location: index.php');
?>
