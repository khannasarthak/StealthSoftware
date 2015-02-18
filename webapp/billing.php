<?php 

$params = json_decode(file_get_contents('php://input'));


$contact=$params->number;

$mysqli=mysqli_connect('localhost','root','password','stealth');

$query = "SELECT `sno`, `time`, `amount`, `billedUnits` FROM `bills` WHERE `user` = '$contact';";
$rows=array();

$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}

echo json_encode($rows);
?>
