<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Registration </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/input.css">

</head>
<body>

	<div class="Wrapper">
		<h1 class="Title">Docter Registeration</h1>
	
	<form method="post" action="D_register.php">

		<h5><?php include('errors.php'); ?></h5>

		<div class="Input">
			
			<input type="text" name="username" id="input" class="Input-text" value="<?php echo $username; ?>" placeholder="Enter New Username">
			<label for="input" class="Input-label">Username</label>
		</div>		
		<div class="Input">
			
			<input type="email" name="email" id="input" class="Input-text" value="<?php echo $email; ?>" placeholder="Your Email">
			<label for="input" class="Input-label">Email</label>
		</div>
		
		<div class="Input">	
			<input type="text" name="name" id="input" class="Input-text" value="<?php echo $name; ?>" placeholder="Enter Your name">
			<label for="input" class="Input-label">Name: DR. </label>
		</div>	
		<div class="Input">	
			<input type="text" name="dQal" id="input" class="Input-text" value="<?php echo $dQal; ?>" placeholder="Enter Your Qualification">
			<label for="input" class="Input-label">Qualification</label>
		</div>		
		<div class="Input">	
			<input type="text" name="dPhone" id="input" class="Input-text" value="<?php echo $dPhone; ?>" placeholder="Enter Your Contact No.">
			<label for="input" class="Input-label">Contact No.</label>
		</div>			
		<div class="Input">	
			<input type="text" name="dadd" id="input" class="Input-text" value="<?php echo $dadd; ?>" placeholder="Enter Your Address">
			<label for="input" class="Input-label">Address</label>
		</div>			
		<div class="Input">
			
			<input type="password" name="password_1" id="input" class="Input-text" placeholder="Your Password">
			<label for="input" class="Input-label">Password</label>
		</div>
		<div class="Input">	
			<input type="password" name="password_2" id="input" class="Input-text" placeholder="Re-Enter Your Password">
				<label for="input" class="Input-label">Confirm password</label>
		</div>
		<div class="Input">
			<button type="submit" class="btn"  name="reg_doc">Register</button>
		</div>
		<h5 class="Title">
			Already Registered as Doctor? <a href="D_login.php">Sign in</a>
		</h5>
	</form>
	</div>
</body>
</html>