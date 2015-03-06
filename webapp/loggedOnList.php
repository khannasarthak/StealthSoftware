<?php 
$mysqli=mysqli_connect('localhost','root','password','stealth');

$query = "SELECT users.uname,loggedon.user,systems.group,systems.sysNo,systems.number FROM users INNER JOIN loggedon ON users.contact=loggedon.user INNER JOIN systems ON loggedon.system=systems.number;";

$rows=array();

$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

while($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}

echo json_encode($rows);
?>
