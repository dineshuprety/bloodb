<?php 
include("config.php");
	
if(isset($_POST['G_PROVINCE_ID']))
{
$sql="Select PROVINCE_ID,PROVINCE_NAME FROM province WHERE COUNTRY_ID=".$_POST['G_PROVINCE_ID'];

$result=$con->query($sql);
if($result->num_rows>0)
{
	echo '<option value="">Select Province</option>';
while($row=$result->fetch_assoc())
{
echo "<option value='{$row['PROVINCE_ID']}'>{$row['PROVINCE_NAME']}</option>";
}
}

}
	
	
	


?>