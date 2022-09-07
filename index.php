<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>
<body>
    <div class="container">
        <figure class="text-center"><img src="images/blogo.png" alt="logo" class="welcome_logo"></figure>
        <div class="welcome_wrapper">
            <h1 class="text-center">Welcome to Blood Stock</h1>
            <form method="post" action="#" autocomplete="off" role="form" enctype="multipart/form-data">
			    <div class="form-group">
			    	<label class="control-label text-primary" for="USERNAME" >Username</label>
			    	<input type="text" placeholder="Username" id="USERNAME" name="USERNAME"  required class="form-control input-sm">
			    </div>
			    <div class="form-group">
			    	<label class="control-label text-primary" for="PASSWORD">Password</label>
			    	<input type="password" placeholder="Password" id="PASSWORD" name="PASSWORD" required class="form-control input-sm">
			    </div>
                <div class="form-group">
					<!-- <button class="btn btn-primary w-100" type="submit" name="submit" id="registernow_btn">Login</button> -->
                    <a href="user.php" class="btn btn-primary w-100" type="submit" name="submit" id="registernow_btn">Login</a>
				</div>
            </form>
            <div>
                Don't have an account ? <a href="Donor_reg.php">Register</a>
            </div>  
            <div>
                <a href="admin.php">Admin Login</a>
            </div>  
        </div>
    </div>
</body>
</html>