<?php 
include("config.php");


if(isset($_POST['G_DISTRICT_ID']))
{
$sql="Select province.PROVINCE_ID, province.PROVINCE_NAME, district.DISTRICT_NAME, district.DISTRICT_ID
From province Inner Join
district On district.PROVINCE_ID = province.PROVINCE_ID
Where district.DISTRICT_ID ={$_POST['G_DISTRICT_ID']}";

$result=$con->query($sql);
if($result->num_rows>0)
{
if($row=$result->fetch_assoc())
{
echo "<option value='{$row['PROVINCE_NAME']}'>{$row['PROVINCE_NAME']}</option>";
}
}

}
	
if(isset($_POST['G_PROVINCE_ID']))
{
$sql="Select PROVINCE_ID,PROVINCE_NAME FROM province WHERE COUNTRY_ID=".$_POST['G_PROVINCE_ID'];

$result=$con->query($sql);
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
echo "<option value='{$row['PROVINCE_ID']}'>{$row['PROVINCE_NAME']}</option>";
}
}

}

?>