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
               <h3 class='text-primary'><i class="fa fa-bank"></i> Add Campaign</h3>
               <hr>
               <div class="row">
                  <div class="col-md-6">
					<?php include 'componets/campaign.php'; ?>
                     <p id='out' class='text-success'></p>
                     <form role="form" action="" method="post">
                        <div class="form-group">
                           <label for="title">Campaign Name</label>
                           <input id="title" required type="text" class="form-control" name="titlename">
                        </div>
                        <div class="form-group">
                           <label for="procince">Select Province</label>
                           <select name="provincename" required class="form-control">
                              <option value="">Select Province</option>
                              <?php
                                 $sql="SELECT PROVINCE_ID,PROVINCE_NAME FROM province ORDER BY PROVINCE_NAME ASC";
                                 $result=$con->query($sql);
                                 if($result->num_rows>0)
                                 {
                                 	while($row=$result->fetch_assoc())
                                 	{
                                 	echo "<option value='{$row['PROVINCE_NAME']}'>{$row['PROVINCE_NAME']}	</option>";
                                 	}
                                 }
                                 ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="District">District Name</label>
                           <input id="District" required type="text" class="form-control" name="districtname">
                        </div>
                        <div class="form-group">
                           <label for="date">Date</label>
                           <input id="date" required type="date" class="form-control" name="datename">
                        </div>
                        <div class="form-group">
                           <label for="contact">Contact</label>
                           <input id="contact" required type="tel" class="form-control" name="contactname">
                        </div>
                        <div class="form-group">
                           <input type="submit" class="btn btn-primary" name='submit' value="Add Campaign">
                        </div>
                     </form>
                  </div>
                  <div class="col-md-12">
                     <?php 
                        $sql="SELECT * FROM campaign ORDER BY id DESC LIMIT 5;";
                        $result=$con->query($sql);
                        if($result->num_rows>0)
                        {
                        		echo "<table class='table table-striped' >";
                        			echo "<tr>
                        					<th>Sno</th>
                        					<th>Campaign Name</th>
                        					<th>Province Name</th>
                        					<th>District Name</th>
                        					<th>Contact Name</th>
                        					<th>Delete</th>
                        				</tr>";
                        				$i=0;
                        				while($row=$result->fetch_assoc())
                        				{
                        					$i++;
                        					echo"<tr>";
                        						echo "<td>$i</td>";
												echo "<td>".$row["campaign_name"]."</td>";
                        						echo "<td>".$row["province_name"]."</td>";
                        						echo "<td>".$row["district_name"]."</td>";
                        						echo "<td>".$row["date"]."</td>";
                        						echo "<td>".$row["contact"]."</td>";
                        						echo "<td><a OnClick=\"return confirm('Are you sure want to delete?');\" href='admin_campaign.php?delete={$row['id']}' class='btn btn-danger btn-sm'><i class='fa fa-trash'></i></a></td>";
                        					echo"</tr>";
                        				}
                        		echo "</table>";
                        }else{
							echo "<div class='alert alert-success text-center'>No Data Found.</div>";
						}
                        mysqli_free_result($result);
         				$con->close();
                        ?>
                   
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
