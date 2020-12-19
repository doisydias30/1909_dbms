<?php
session_start();
	
	
$con = mysqli_connect('localhost','root');
if ($con)
{
	echo "connection successful";
}
else{
"No connection";
}

mysqli_select_db($con, 'books');

$name = $_POST['con_nm'];
$email = $_POST['con_email'];
$query = $_POST['con_query'];

	$qy="insert into contact(con_nm,con_email,con_query)
	values('$name','$email','$query')";

mysqli_query($con, $qy) or die("Can't Execute Query...");
header("location:contact.php");

?>
