<?php 

$mysqli=mysqli_connect('localhost','root','password','stealth');

$query = "SELECT * FROM `pricingmodels`;";
$rows=array();

$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}

echo json_encode($rows);
?>
