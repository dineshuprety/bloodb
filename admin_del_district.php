<?php
include("config.php");
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sql="DELETE FROM district WHERE DISTRICT_ID=$id";
	$con->query($sql);
	echo "<script>
		alert('District Deleted');
		window.open('admin_district.php','_self');
	</script>";
}
?>