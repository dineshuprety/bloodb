<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include"head.php";?>
<body>
    <div class="container">
        <figure class="text-center"><img src="images/blogo.png" alt="logo" class="welcome_logo"></figure>
        <div class="welcome_wrapper">
            <h1 class="text-center">Welcome to Blood Stock</h1>
            <?php include 'componets/login.php' ?>
            <form method="post" action="" autocomplete="off" role="form">
			    <div class="form-group">
			    	<label class="control-label text-primary" for="USERNAME" >Email</label>
			    	<input type="email" placeholder="Email" id="USERNAME" name="email"   class="form-control input-sm">
			    </div>
			    <div class="form-group">
			    	<label class="control-label text-primary" for="PASSWORD">Password</label>
			    	<input type="password" placeholder="Password" id="PASSWORD" name="password"  class="form-control input-sm">
			    </div>
                <div class="form-group">
					<button class="btn btn-primary w-100" type="submit" name="submit" id="registernow_btn">Login</button>
                    <!-- <a  class="btn btn-primary w-100" type="submit" name="submit" id="registernow_btn">Login</a> -->
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