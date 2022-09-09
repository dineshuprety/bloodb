<?php 
$con=new mysqli("127.0.0.1","root","","blood");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>