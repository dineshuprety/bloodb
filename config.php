<?php 
$con=new mysqli("127.0.0.1","root","root","blood",8889);
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>