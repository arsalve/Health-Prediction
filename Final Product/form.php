
<?php include('ins.php') ?>
<?php 

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<html>
<head>
	<title>Create Record</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
body p {
	text-align: center;
}
</style>
</head>
<body>
<table width="810" height="30" border="5" cellpadding="5">
    <td width="62"><p>PatientID </p>
    <p>
      <input  type="text" name="PatientID" id='Uid' placeholder="Enter Your PatientID">
    </p></td>
    <td width="29"><p>Age </p>
      <p>
        <input  type="number" name="Age" id= 'Age' placeholder="Enter Your Age">
      </p></td>
    <td width="27"><p>Sex</p>
      <p>&nbsp;</p>
      <div>
        <input id="radio1" type="radio" name="Sex" value="Male" checked="checked">
        <label for="radio1"> Male </label>
      </div>
      <div >
        <input id="radio2" type="radio" name="Sex" value="Female">
        <label> Female </label>
      </div>
      <p>&nbsp;</p></td>
    <td width="92"><p>ChestPainType</p>
      <p>&nbsp;</p>
      <div>
        <input id="radio9" type="radio" name="ChestPainType" value="0" checked="checked">
        <label for="radio9"> No </label>
      </div>
      <div >
        <input  id="radio10" type="radio" name="ChestPainType" value="1">
        <label for="radio10"> low </label>
      </div>
      <div>
        <input id="radio15" type="radio" name="ChestPainType" value="2" checked="checked">
        <label> mid </label>
      </div>
      <div>
        <input  id="radio16" type="radio" name="ChestPainType" value="3">
        <label for="radio16"> High </label>
      </div>
      <p>&nbsp;</p></td>
    <td width="91"><p>BloodPressure </p>
      <p>
        <input type="number" name="BloodPressure" id= 'BloodPressure' placeholder="Enter Your BloodPressure">
      </p></td>
    <td width="70"><p>&nbsp;</p>
      <p>Cholesterol </p>
      <p>
        <input type="number" name="Cholesterol" id= 'Cholesterol' placeholder="Enter Your Cholesterol">
      </p>
      <p>&nbsp;</p></td>
    <td width="73"><p>BloodSugar</p>
      <p>&nbsp;</p>
      <div>
        <input id="radio17" type="radio" name="BloodSugar" value="0" checked="checked">
        <label> present </label>
      </div>
      <div>
        <input  id="radio18" type="radio" name="BloodSugar" value="1">
        <label> absent </label>
      </div></td>
    <td width="42"><p>Max heart Rate </p>
      <p>
        <input type="number" name="MaxHeartRate" id= 'MaxHeartRate' placeholder="Enter Your MaxHeartRate">
      </p></td>
    <td width="49"><div>
      <p><span>Angina</span> </p>
      <p>&nbsp; </p>
      <div>
        <input  id="radio19" type="radio" name="Angina" value="0">
        <label> present </label>
      </div>
      <div>
        <input  id="radio20" type="radio" name="Angina" value="1">
        <label> absent </label>
      </div>
    </div></td>
    <td width="58"><p>OldPeak </p>
      <p>
        <input  type="number" name="OldPeak" id= 'OldPeak' placeholder="Enter Your OldPeak">
      </p></td>
    <td width="82"><p>MajorVessels </p>
      <p>
        <input type="number" name="MajorVessels" id= 'MajorVessels' placeholder="MajorVessels Effected">
      </p></td>
    <td width="73"><p>Thal </p>
      <p>
        <input type="number" name="Thal" id= 'Thal' placeholder="Thal">
      </p>
      </td>
      <td height="64"><button type="submit" class="btn" name="r_ins">Submit</button></td>


</table>
</body>
</html>