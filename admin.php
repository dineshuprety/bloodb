<!DOCTYPE html>
<?php
session_start();
include("config.php");
?>
<html lang="en">

<head>

	<?php include("head.php");?>

</head>

<body>

    <!-- Page Content -->
    <div class="container" style="margin-top:10 px;">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row centered">
            <div class="col-lg-12">
                <h1 class="page-header text-primary"><i class='fa fa-user-md'></i> Admin Login</h1>
              
            </div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				<?php
				if(isset($_POST["submit"]))
					{
						if($_POST["user"]=="bloodb"&&$_POST["pass"]=="admin")
						{
							 $_SESSION['usertype'] ='admin';
							 $_SESSION['username']='admin';
							
							header("location:admin_inbox.php");
						}
						else
						{
							echo "<div class='alert alert-danger'><b>Error : </b> User Name and Password Incorrect. Try Again !</div>";
							
						}
					}
				?>
					<form role="form" action="admin.php" method="post">
			    	  	<div class="form-group">
							 <label for="user_name" class="text-primary">Username</label>
			    		    <input class="form-control" name="user"  id="user" type="text" placeholder="Username" required>
			    		</div>
			    		<div class="form-group">
							<label for="pass" class="text-primary">Password</label>
			    			<input class="form-control" id="pass" name="pass" type="password" value="" placeholder="Password" required>
			    		</div>
						
						
			    		<button class="btn btn-primary w-100" name="submit" type="submit"><i class="fa fa-sign-in"></i> Login</button>

			      	</form>

				</div>

				<div class="col-md-3"></div>

			</div>

        </div>

        <!-- /.row -->

        </div>
      
  
</body>

</html>
