<?php 
$params = json_decode(file_get_contents('php://input'));

$user=$params->contact;
$mysqli=mysqli_connect('localhost','root','password','stealth');

$query = "SELECT `time`, `amount`, `hours` FROM `bills` WHERE `user` = '$user';";
$rows=array();

$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}

echo json_encode($rows);
?>
