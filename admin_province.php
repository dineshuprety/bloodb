<?php
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
<div class="container"  style='margin-top:70px;'>
	<div class="row">
		<div class="col-sm-3">
			<?php include("admin_side_nav.php");?>
		</div>
		<div class="col-sm-9" >
			<h3 class='text-primary'><i class="fa fa-bank"></i> Add Province</h3><hr>    
			<div class="row">
				<div class="col-md-6">
				<?php 
				if(isset($_POST["province_submit"]))
				{
					$sql="INSERT INTO province (PROVINCE_NAME,COUNTRY_ID) VALUES ('".$_POST["provincename"]."',".$_POST["COUNTRY"].")";
					$con->query($sql);
					
				}
				
				?>
				
					<p id='out' class='text-success'></p>
					<form role="form" action="admin_province.php" method="post">
					
						
						  <div class="form-group">
								<label class="control-label text-primary" for="COUNTRY">Country</label>
                                <select name="COUNTRY" id="COUNTRY" required class="form-control">
								<option value="">Select Country</option>
								<?php
									$sql="SELECT COUNTRY_ID,COUNTRY_NAME FROM country ORDER BY COUNTRY_NAME ASC";
									$result=$con->query($sql);
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{
											echo "<option value='{$row['COUNTRY_ID']}'>{$row['COUNTRY_NAME']}	</option>";
										}
									}
								?>
								</select>
                          </div>
						<div class="form-group text-primary">
							<label for="province">Province Name</label>
							<input id="province" required type="text" class="form-control" name="provincename">
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary" name='province_submit' value="Add Province">
						</div>
						
					</form>
				</div>
				<div class="col-md-6">
					<?php 
						$sql="Select country.COUNTRY_NAME, province.PROVINCE_NAME,province.PROVINCE_ID
From province Inner Join
  country On province.COUNTRY_ID = country.COUNTRY_ID ORDER BY PROVINCE_ID desc LIMIT 0,5 ";
						$result=$con->query($sql);
						if($result->num_rows>0)
						{
								echo "<table class='table table-striped' >";
									echo "<tr>
											<th>Sno</th>
											<th>Country Name</th>
											<th>Province Name</th>
											<th>Delete</th>
										</tr>";
										$i=0;
										while($row=$result->fetch_assoc())
										{
											$i++;
											echo"<tr>";
												echo "<td>$i</td>";
												echo "<td>".$row["COUNTRY_NAME"]."</td>";
												echo "<td>".$row["PROVINCE_NAME"]."</td>";
												echo "<td><a href='admin_del_province.php?id=".$row["PROVINCE_ID"]."' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></td>";
											echo"</tr>";
										}
								echo "</table>";
						}
						
					?>
					
					<a href='admin_view_province.php' class='btn btn-primary'><i class='fa fa-edit'></i> View All</a>
				</div>
			</div>
		
		
		</div>
	</div>
</div>
  
  
<div class="main-footer">
        <div class="container">
            <?php include"footer.php"; ?>
        </div>
    </div>
  
	</body>
</html>