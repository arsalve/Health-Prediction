<?php include('server.php') ?>
<?php
	
	$PatientID="";	
	$Age="";
	$Sex="";	
	$ChestPainType="";	
	$BloodPressure="";	
	$Cholesterol="";	
	$BloodSugar="";	
	$EC_Results=NULL;	
	$MaxHeartRate="";	
	$Angina	="";
	$OldPeak="";
	$PeakSlope="";
	$MajorVessels="";	
	$Thal="";
	$Outcome=NULL;


		$conn = mysqli_connect('localhost', 'demo', '123','healthanalysis');
	//echo "<script type='text/javascript'>alert('Connected');</script>";
	// insert data into database
	if (isset($_POST['r_ins'])){
		
	$PatientID=$_POST['PatientID'];	
	$Age=$_POST['Age'];
	$Sex=$_POST['Sex'];	
	$ChestPainType=$_POST['ChestPainType'];	
	$BloodPressure=$_POST['BloodPressure'];	
	$Cholesterol=$_POST['Cholesterol'];	
	$BloodSugar=$_POST['BloodSugar'];	
	$EC_Results=$_POST['EC_Results'];
	$MaxHeartRate=$_POST['MaxHeartRate'];	
	$Angina	=$_POST['Angina'];
	$OldPeak=$_POST['OldPeak'];
	$PeakSlope=$_POST['PeakSlope'];
	$MajorVessels=$_POST['MajorVessels'];	
	$Thal=$_POST['MajorVessels'];
	
	$query ="INSERT INTO priid(PatientID,Age,Sex,ChestPainType,BloodPressure,Cholesterol,BloodSugar,EC_Results,MaxHeartRate,Angina,OldPeak,PeakSlope,MajorVessels,Thal)
			VALUES('$PatientID','$Age','$Sex','$ChestPainType','$BloodPressure','$Cholesterol','$BloodSugar','$EC_Results','$MaxHeartRate','$Angina','$OldPeak','$PeakSlope','$MajorVessels','$Thal')";
			
	mysqli_query($conn, $query);
	}
	
		if (isset($_POST['r_up'])){
		
	$PatientID=$_POST['PatientID'];	
	$Age=$_POST['Age'];
	$Sex=$_POST['Sex'];	
	$ChestPainType=$_POST['ChestPainType'];	
	$BloodPressure=$_POST['BloodPressure'];	
	$Cholesterol=$_POST['Cholesterol'];	
	$BloodSugar=$_POST['BloodSugar'];	
	$EC_Results=$_POST['EC_Results'];
	$MaxHeartRate=$_POST['MaxHeartRate'];	
	$Angina	=$_POST['Angina'];
	$OldPeak=$_POST['OldPeak'];
	$PeakSlope=$_POST['PeakSlope'];
	$MajorVessels=$_POST['MajorVessels'];	
	$Thal=$_POST['Thal'];
	$query="DELETE FROM priid WHERE PatientID='$PatientID'";
	echo "<script type='text/javascript'>alert('Deleted');</script>";
	$query1 ="INSERT INTO priid(PatientID,Age,Sex,ChestPainType,BloodPressure,Cholesterol,BloodSugar,EC_Results,MaxHeartRate,Angina,OldPeak,PeakSlope,MajorVessels,Thal)
			VALUES('$PatientID','$Age','$Sex','$ChestPainType','$BloodPressure','$Cholesterol','$BloodSugar','$EC_Results','$MaxHeartRate','$Angina','$OldPeak','$PeakSlope','$MajorVessels','$Thal')";
	echo "<script type='text/javascript'>alert('Updated');</script>";	
	mysqli_query($conn, $query);
	mysqli_query($conn, $query1);
	}
	mysqli_close($conn);
	
?>