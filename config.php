<?php 

$con=new mysqli("localhost","root","","blood");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>