<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("head.php");?>
   </head>
   <body>
      <?php
         include("top_nav.php");
         ?>
      <div class="container"  style='margin-top:70px'>
         <div class="row">

            <div class="col-sm-9" >
               <h3 class='text-primary'><i class="fa fa-users"></i> Donor Details </h3>
               <hr>
               <div class="row">
                  <?php 
                        $email = $_SESSION['email'];
                     	$sql="SELECT * FROM blood_donor WHERE EMAIL = '$email'";
                     	$result=$con->query($sql);
                     	if($result->num_rows>0)
                     	{
                     		$row=$result->fetch_assoc();
                     		
                     ?>
                  <div class="col-md-4">
                     <div class="panel">
                        <div class="panel-body">
                           <img src="<?php echo $row["DONOR_PIC"];?>" class="image-rounded" height="300px" width="100%">
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <table class="table table-striped">
                        <tr>
                           <th>Name</th>
                           <td><?php echo $row["NAME"];?></td>
                        </tr>
                        <tr>
                           <th>Father Name</th>
                           <td><?php echo $row["FATHER_NAME"];?></td>
                        </tr>
                        <tr>
                           <th>Gender</th>
                           <td><?php echo $row["GENDER"];?></td>
                        </tr>
                        <tr>
                           <th>D.O.B</th>
                           <td><?php echo $row["DOB"];?></td>
                        </tr>
                        <tr>
                           <th>Blood Group</th>
                           <td><?php echo $row["BLOOD"];?></td>
                        </tr>
                        <tr>
                           <th>Body Weight</th>
                           <td><?php echo $row["BODY_WEIGHT"];?></td>
                        </tr>
                        <tr>
                           <th>Email</th>
                           <td><?php echo $row["EMAIL"];?></td>
                        </tr>
                        <tr>
                           <th>Address</th>
                           <td><?php echo $row["ADDRESS"];?></td>
                        </tr>
                        <tr>
                           <th>Area</th>
                           <td><?php echo $row["AREA"];?></td>
                        </tr>
                        <tr>
                           <th>District</th>
                           <td><?php echo $row["DISTRICT"];?></td>
                        </tr>
                        <tr>
                           <th>Province</th>
                           <td><?php echo $row["PROVINCE"];?></td>
                        </tr>
                        <tr>
                           <th>Contact-1</th>
                           <td><?php echo $row["CONTACT_1"];?></td>
                        </tr>
                        <tr>
                           <th>Contact-2</th>
                           <td><?php echo $row["CONTACT_2"];?></td>
                        </tr>
                        <tr>
                           <th>Is New Donor</th>
                           <td><?php echo $row["NEW_DONOR"];?></td>
                        </tr>
                        <tr>
                           <th>Last Donoted Date</th>
                           <td><?php echo $row["LAST_D_DATE"];?></td>
                        </tr>
                     </table>
                  </div>
                  <?php
                     }
                     else
                     {
                    //  echo "<script>window.open('admin_donor.php','_self');</script>";
                     }
                     
                     ?>	
               </div>
            </div>
         </div>
      </div>
      <script></script>
      <div class="main-footer">
         <div class="container">
            <?php include"footer.php"; ?>
         </div>
      </div>
   </body>
</html>
