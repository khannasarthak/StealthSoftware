<?php 

$params = json_decode(file_get_contents('php://input'));

$json=array();

$contact=$params->number;

$mysqli=mysqli_connect('localhost','root','password','stealth');

$query = "SELECT `contact`, `uname`, `joindate`, `level` FROM `users` WHERE `contact` = '$contact';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$profile=mysqli_fetch_array($result);

$num_row = mysqli_num_rows($result);

if($num_row==0)
{
    echo 0;
    exit(1);
}

$query = "SELECT `amount` FROM `account` WHERE `user` = '$contact';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$amountRow=mysqli_fetch_array($result);

$query = "SELECT `plan` FROM `pricingplan` WHERE `user` = '$contact';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$pricingRow=mysqli_fetch_array($result);

$query = "SELECT `system` FROM `loggedon` WHERE `user` = '$contact';";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$isLoggedRow=mysqli_fetch_array($result);

$json[]=array(
'contact' => $profile['contact'],
    'name' => $profile['uname'],
    'join' => $profile['joindate'],
    'level' => $profile['level'],
    'balance' => $amountRow['amount'],
    'plan' => $pricingRow['plan'],
    'system' => $isLoggedRow['system']
);

$jsonstring = json_encode($json);
header('Content-Type: application/json');
echo $jsonstring;
?>