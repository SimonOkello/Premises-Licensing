<?php
$db_host="localhost";
$db_user="root";
$db_password= "";
$db_name="premises";

$conn=mysqli_connect($db_host, $db_user, $db_password) or die(mysqli_error());

if (!$conn) {
	die('Could not connect to database'.mysqli_error());

	}else{
	echo "Connected successfully";
}
mysqli_close($conn);
?>