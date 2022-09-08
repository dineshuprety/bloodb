<?php 
   include("config.php");
   error_reporting(0);?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("head.php");?>
   </head>
   <body>
      <div class="container" style='margin-top:10px;'>
         <div class="row">
            <div class="col-md-12">
               <h3 class=" text-primary">
                  <i class='fa fa-users'></i> New Donor Registration
               </h3>
               <hr>
               <div class="row aboutus-minihead">
                  <div class="col-lg-12 col-xs-12">
                     <ol class="breadcrumb">
                        <li><a href="Donor_reg.php" style='text-decoration:none;'><i class='fa fa-users'></i> Donor Registration</a></li>
                     </ol>
                     <?php include 'componets/register.php'; ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="row centered ">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
               <div class="panel panel-primary">
                  <div class="panel-heading">
                     <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-user "> </span> JOIN AS BLOOD DONOR</h3>
                  </div>
                  <div class="panel-body">
                     <form action="" method="post" autocomplete="off" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                           <label class="control-label text-primary" for="NAME" >Name</label>
                           <input type="text" placeholder="Full Name" id="NAME" required name="NAME"   class="form-control input-sm">
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="FATHER_NAME">Father Name</label>
                           <input type="text" placeholder="Father Name" id="FATHER_NAME" required name="FATHER_NAME"  class="form-control input-sm">
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary"  for="GENDER">Gender</label>
                           <select id="gen" required name="GENDER"  class="form-control input-sm">
                              <option value="">Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Others">Others</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="DOB">D.O.B</label>
                           <input type="text"  placeholder="YYYY/MM/DD"  id="DOB" required name="DOB"  class="form-control input-sm DATE">
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="BLOOD" >Blood Group</label>
                           <select id="blood" required name="BLOOD"  class="form-control input-sm">
                              <option value="">Select Blood</option>
                              <option value="A+">A+</option>
                              <option value="B+">B+</option>
                              <option value="O+">O+</option>
                              <option value="AB+">AB+</option>
                              <option value="A-">A-</option>
                              <option value="B-">B-</option>
                              <option value="O-">O-</option>
                              <option value="AB-">AB-</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="BODY_WEIGHT" >Body Weight</label>
                           <input type="number"  placeholder="Weight In Kgs"  required name="BODY_WEIGHT" id="BODY_WEIGHT" class="form-control input-sm">
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="EMAIL" >Email ID</label>
                           <input type="email"   required name="EMAIL" id="EMAIL" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="COUNTRY">Country</label>
                           <select required name="COUNTRY" id="COUNTRY"  class="form-control">
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
                        <div class="form-group">
                           <label class="control-label text-primary" for="PROVINCE">Province</label>
                           <select required name="PROVINCE" id="PROVINCE"  class="form-control">
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
                           <label class="control-label text-primary" for="DISTRICT" >District</label>
                           <select required name="DISTRICT" id="DISTRICT"  class="form-control">
                              <option value="">Select District</option>
                              <?php
                                 $sql="SELECT DISTRICT_NAME,DISTRICT_ID FROM district ORDER BY DISTRICT_NAME";
                                 $result=$con->query($sql);
                                 if($result->num_rows>0)
                                 {
                                 	while($row=$result->fetch_assoc())
                                 	{
                                 	echo "<option value='{$row['DISTRICT_ID']}'>{$row['DISTRICT_NAME']}	</option>";
                                 	}
                                 }
                                 
                                 ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="AREA" >Area</label>
                           <input type="text"  required name="AREA" id="AREA" class="form-control" placeholder="Insert Area">
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="ADDRESS">Address</label>
                           <textarea  required name="ADDRESS" id="ADDRESS" rows="5" style="resize:none;"class="form-control" placeholder="Full Address"></textarea>
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="CONTACT_1" >Contact-1</label>
                           <input type="number"  required name="CONTACT_1" id="CONTACT_1" class="form-control" placeholder="Contact No-1">
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="CONTACT_2" >Contact-2</label>
                           <input type="number" required name="CONTACT_2" id="CONTACT_2" class="form-control" placeholder="Contact No-2">
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="CONTACT_2" >Password</label>
                           <input type="text" required name="PASSWORD" id="CONTACT_2" class="form-control" placeholder="Password">
                        </div>
                        <hr>
                        <div id="volu">
                           <div class="form-group">
                              <label class="control-label text-primary"  for="LAST_D_DATE">Last Blood Donoted Date</label>
                              <input type="date"  required name="LAST_D_DATE" value=""  id="LAST_D_DATE" placeholder="YYYY/MM/DD" class="form-control input-sm" max="<?php echo date("Y-m-d", time()-7776000); ?>">
                           </div>
                        </div>
                        <div class="form-group" id="new">
                           <label class="control-label text-primary"  for="NEW_DONOR">New Donor</label>
                           <select required name="NEW_DONOR"  id="NEW_DONOR"  class="form-control input-sm">
                              <option value="">Select</option>
                              <option value="Yes" >Yes</option>
                              <option value="No" selected>No</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label class="control-label text-primary" for="fileToUpload" >Upload Photo</label>
                           <input type="file" class="form-control"  required name="fileToUpload">
                        </div>
                        <div class="form-group">
                           <label class="control-label text-muted"><input type="checkbox" checked id="c3" >&nbsp; I agree to all the Terms and Conditions and give consent to have my contact and donor information published to the potential blood recipients. Also, I am eligible candidate to donate blood.</label>
                        </div>
                        <div class="form-group">
                           <button class="btn btn-primary w-100" type="submit" required name="submit" id="registernow_btn">Register Now</button>
                           <!-- <a class="btn btn-primary w-100" id="registernow_btn"><button type="submit" name="submit">Register Now</button></a> -->
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
         $(document).ready(
         
         
         			function(){
         					$("#c1").click(function(){
         						if($("#c1").is(':checked'))
         						{
         							$("#volu").show(1000);
         							$("#new").hide(100);
         						}
         						else
         						{
         							$("#volu").hide(1000);
         							$("#new").show(100);
         						}
         					});
         					
         					
         					
         					$("#COUNTRY").change(function(){
         						var country=$("#COUNTRY").val();
         						//alert(district);
         						$.post('get_province.php',{G_PROVINCE_ID:country},function(data){
         						//	alert(data);
         							$("#PROVINCE").html(data);
         						});
         						
         					});
         					
         						$("#PROVINCE").change(function(){
         						var stid=$("#PROVINCE").val();
         						//alert(district);
         						$.post('get_district.php',{G_PROVINCE_ID:stid},function(data){
         						//	alert(data);
         							$("#DISTRICT").html(data);
         						});
         						
         					});
         				
         					
         						
         			});
         
         
          $(function() {
            var availableTags = [
              <?php 
            $sql="SELECT AREA_NAME FROM area";
            				$result=$con->query($sql);
            				
            				if($result->num_rows>0)
            				{
            					$i=0;
            					$n=$result->num_rows;
            					while($row=$result->fetch_assoc())
            					{   
            						$i++;
            						if($n!=$i)
            						{
            							echo '"'.$row['AREA_NAME'].'",';
            						}
            						else
            						{
            							echo '"'.$row['AREA_NAME'].'"';
            						}
            					}
            					
            				}
            
            
            ?>
            ];
            $( "#AREA" ).autocomplete({
              source: availableTags
            });
          });
          
      </script>
   </body>
</html>
