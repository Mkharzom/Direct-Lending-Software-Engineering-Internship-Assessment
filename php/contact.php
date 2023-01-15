<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','dldb');

// get the post records

$dbname = $_POST['name'];
$dbdob = $_POST['dob'];
$dbadd = $_POST['address'];
$dbpost = $_POST['postcode'];

// database insert SQL code
$sql = "INSERT INTO `customer` (`id`, `name`, `dop`, `address`, `postocde_id`) VALUES ('0', '$dbname', '$dbdob', '$dbadd', '$dbpost')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}

?>
