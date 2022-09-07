
session_start();
include("config.php");
include("admin_function.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("admin_topnav.php"); ?>
<div class="container"  style='margin-top:70px' >
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class='text-primary'><i class="fa fa-bank"></i> Add Area </h3><hr>    
			<div class="row">
				<div class="col-md-6">
				<?php 
				if(isset($_POST["area_submit"]))
				{
				 $sql="INSERT INTO area(DISTRICT_ID,PROVINCE_ID,AREA_NAME) VALUES ('".$_POST["DISTRICT"]."','".$_POST["statename"]."','".$_POST["areaname"]."')";
					$con->query($sql);
					
				}
				
				?>
				
					<p id='out' class='text-success'></p>
					<form role="form" action="admin_area.php" method="post">
				
					<div class="form-group text-primary">
							<label for="PROVINCE">Select Province</label>
							<select name="provincename" id="PROVINCE" required class="form-control">
								<option value="">Select Province</option>
								<?php
									$sql="SELECT PROVINCE_ID,PROVINCE_NAME FROM province ORDER BY PROVINCE_NAME ASC";
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
										echo "<option value='{$row['PROVINCE_ID']}'>{$row['PROVINCE_NAME']}	</option>";
										}
									}
								?>
							</select>
						</div>
						
						
						<div class="form-group">
								
								<span id="district_feed"></span>
							

                          </div>
						  
						  <div class="form-group text-primary">
							<label for="area">Area Name</label>
							<input id="area" required type="text" class="form-control" name="areaname">
						</div>
						
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name='area_submit' value="Add Area">
						</div>
						
					</form>
				</div>
				<div class="col-md-6">
					<?php 
						$sql="

Select province.PROVINCE_NAME, district.DISTRICT_NAME, area.AREA_NAME, area.AREA_ID
From area Inner Join
province On area.PROVINCE_ID = province.PROVINCE_ID Inner Join
district On area.DISTRICT_ID = district.DUSTRICT_ID
ORDER BY AREA_ID desc LIMIT 0,5";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
								echo "<table class='table table-striped' >";
									echo "<tr>
											<th>Sno</th>
											<th>Province Name</th>
											<th>District Name</th>
											<th>Area Name</th>
											<th>Delete</th>
										</tr>";
										$i=0;
										while($row=$result->fetch_assoc())
										{
											$i++;
											echo"<tr>";
												echo "<td>$i</td>";
												echo "<td>".$row["PROVINCE_NAME"]."</td>";
												echo "<td>".$row["DISTRICT_NAME"]."</td>";
												echo "<td>".$row["AREA_NAME"]."</td>";
												echo "<td><a href='admin_del_area.php?id=".$row["AREA_ID"]."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></td>";
											echo"</tr>";
										}
								echo "</table>";
						}
						
					?>
					<a href='admin_view_area.php' class='btn btn-primary'><i class='fa fa-edit'></i> View All</a>
				</div>
			</div>
		
		
		</div>
	</div>
</div>
  

  <script>
  $(document).ready(function(){
	  
	  $("#PROVINCE").change(function(){
		  var id= $("#PROVINCE").val();
		  $.post('load_district.php',{sid:id},function(data){
			 // alert(data);
			  $("#district_feed").html(data);
		  });
	  });
  });
  </script>
  <div class="main-footer">
        <div class="container">
            <?php include"footer.php"; ?>
        </div>
    </div>
	</body>
</html>