
<?php include('ins.php') ?>
<?php 

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: ../login.php");
	}

?>
<html>
<head>
	<title>Create Record</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<form method="post">
<div>
<span>PatientID</span>
<input  type="text" name="PatientID" id='Uid' placeholder="Enter Your PatientID">
</div>
<div>
					<span>Age</span>
					<input  type="number" name="Age" id= 'Age' placeholder="Enter Your Age">
				</div>
	
	
	
	<div >
						<span>Sex</span>
						<div>
							<input id="radio1" type="radio" name="Sex" value="Male" checked="checked">
							<label for="radio1">
							Male
							</label>
						</div>
						<div >
							<input id="radio2" type="radio" name="Sex" value="Female">
							<label>
							Female
							</label>
						</div>
						
						
		<div>
						<span>ChestPainType</span>
						<div>
							<input id="radio3" type="radio" name="ChestPainType" value="0" checked="checked">
							<label for="radio3">
							No		
							</label>
						</div>
						
						<div >
							<input  id="radio4" type="radio" name="ChestPainType" value="1">
							<label for="radio4">
							low
							</label>
						</div>		
					
					<div>
							<input id="radio5" type="radio" name="ChestPainType" value="2" checked="checked">
							<label>
							mid
							</label>
						</div>
						
						<div>
							<input  id="radio6" type="radio" name="ChestPainType" value="3">
							<label for="radio6">
							High
							</label>
						</div>
												
						</div>
						
						
						<div>
					<span>BloodPressure</span>
					<input type="number" name="BloodPressure" id= 'BloodPressure' placeholder="Enter Your BloodPressure">
				</div>
				
				
				<div>
					<span>Cholesterol</span>
					<input type="number" name="Cholesterol" id= 'Cholesterol' placeholder="Enter Your Cholesterol">
				</div>
						
					


	<div>
						<span>BloodSugar</span>
						<div>
							<input id="radio7" type="radio" name="BloodSugar" value="0" checked="checked">
							<label>
							present
							</label>
						</div>
						<div>
							<input  id="radio8" type="radio" name="BloodSugar" value="1">
							<label>
							absent
							</label>
						</div>					
			
						</div>		
					<div>
					<span>Max heart Rate</span>
					<input type="number" name="MaxHeartRate" id= 'MaxHeartRate' placeholder="Enter Your MaxHeartRate">
				</div>
					
					<div>
						<span>Angina</span>
						<div>
							<input  id="radio11" type="radio" name="Angina" value="0">
							<label>
							present
							</label>
						</div>
						<div>
							<input  id="radio12" type="radio" name="Angina" value="1">
							<label>
							absent
							</label>
					<div>
					<span>OldPeak</span>
					<input  type="number" name="OldPeak" id= 'OldPeak' placeholder="Enter Your OldPeak">
				</div>
		<div>
							<input  id="radio13" type="radio" name="PeakSlope" value="0">
							<label >
							present
							</label>
						</div>
						<div >
							<input id="radio14" type="radio" name="PeakSlope" value="1">
							<label >
							absent
							</label>
							<div >
					<span>MajorVessels</span>
					<input type="number" name="MajorVessels" id= 'MajorVessels' placeholder="MajorVessels Effected">
				</div>
						<div>
					<span>Thal Value</span>
					<input type="number" name="Thal" id= 'Thal' placeholder="Thal">
				</div>
				<div>
							<button type="submit" class="btn" name="r_ins">Submit</button>
							
						</div>
					

</form>


</body>
</html>