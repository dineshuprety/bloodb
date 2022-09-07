<?php
include("config.php");
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$sql="DELETE FROM province WHERE PROVINCE_ID=$id";
	$con->query($sql);
	echo "<script>
		alert('Province Deleted');
		window.open('admin_state.php','_self');
	</script>";
}
?>