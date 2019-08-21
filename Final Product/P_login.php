<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/input.css">
	

</head>
<body>

	<div class="Wrapper">
		<h1 class="Title">Login</h1>
	
	<form method="post" action="P_login.php">

		<?php include('errors.php'); ?>

		
		
	<div class="Input">
    <input type="text" id="input" class="Input-text" name="username" placeholder="Your Username">
    <label for="input" class="Input-label">Username</label>
  </div>
	<div class="Input">
			<input type="password" name="password" id="input" class="Input-text" placeholder="Your Password">
			<label for="input" class="Input-label">Password</label>
		</div>
		<div class="input-group">
			<button type="submit" class="btn"  name="login_user">Login</button>
		</div>
		<br><br><br>
		<h5 class="Title">
			Not yet a User<a href="register.php">Sign up</a>
		</h5><h5 class="Title">
			Go To index Page<a href="index.php">Go Back</a>
		</h5>
	</form>

</div>
</body>
</html>