<?php 

$mysqli=mysqli_connect('localhost','root','password','stealth');
$query = "SELECT SUM(`amount`) AS sum FROM `bills` WHERE `time` = CAST(curdate() AS char);";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
            if($row['sum']==NULL)
            echo 0.0;
            else
			 echo $row['sum']; 
		}
		else{
			echo 'false';
		}
?>