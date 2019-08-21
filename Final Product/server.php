<?php
	if(!isset($_SESSION)) { session_start();}

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array();
	$username="";
	$results="";
	$name ="";
	$dQal="";
	$dPhone="";
	$dadd="";
//heart variables
	$PatientID="";
	$Age="";
	$Sex="";	
	$ChestPainType="";	
	$BloodPressure="";
	$Cholesterol="";
	$BloodSugar="";
	$EC_Results="";
	$MaxHeartRate="";	
	$Angina	="";
	$OldPeak="";
	$PeakSlope="";
	$MajorVessels="";
	$Thal="";
	$id="";


	$_SESSION['success'] = "";
	$time=date("Y-m-d h:i:sa");


	// connect to database
	$db = mysqli_connect('localhost', 'demo', '123', 'HealthAnalysis');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password =md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (Username, Email, Password)
					  VALUES('$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: dashbord.php');
		}

	}
//Docter Registration
	
	if (isset($_POST['reg_doc'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$name =mysqli_real_escape_string($db, $_POST['name']);
		$dQal=mysqli_real_escape_string($db, $_POST['dQal']);
		$dPhone=mysqli_real_escape_string($db, $_POST['dPhone']);
		$dadd=mysqli_real_escape_string($db, $_POST['dadd']);
		
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($name)) { array_push($errors, "name is required"); }
		if (empty($dQal)) { array_push($errors, "Qualification is required"); }
		if (empty($dPhone)) { array_push($errors, "Phone is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password =md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO doctor (Username, Email, Password,Did,dName,dadd,dPhone,dQal)
					  VALUES('$username', '$email', '$password','','$name','$dadd','$dPhone','$dQal')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: D_dashbord.php');
		}

	}


	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password =md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results)) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: dashbord.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
	// LOGIN Doctor
	if (isset($_POST['login_Doc'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password =md5($password);
			$query = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results)) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
			/*	
				$sql  = "SELECT * FROM stud WHERE Uname='$username'";
		$result = mysqli_query($db, $sql);
			while($row = mysqli_fetch_assoc($result)) 
			{
				$Didl=$row["Did"];
			}
			echo "<script type='text/javascript'>alert('$Did');</script>";
				*/
				header('location: D_dashbord.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

//Age Calculation



?>
