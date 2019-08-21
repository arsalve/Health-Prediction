<?php include('server.php') ?>
<?php include('a.php') ?>
<?php include('prin.php') ?>
<?php 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}
	
		

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<style>	
table {
	border-collapse: collapse;
	border-spacing: 0;
	border: 5px solid black;
	display: table-cell
}

th, td {
	text-align: center;
	padding: 0px;
	height: 100%;
	width: 100%;
}
th {
  background-color: black;;
  color: rgb(101, 250, 2);;
  
  
}
</style>
</head>
 <!-- navigation bar-->
 <nav>
			<nav>
			<div id="dnavigation">
			<ul>
			<li><a href="dashbord.php">Home</a></li>
			<li><a  href="Dataform/createEHR.php">Create a Record</a> </li>
			<li><a  href="#">More information</a></li>
			<li><a href="Dataform/ModifyEhr.php">Modify a Record</a></li>
			<li><a href="dashbord.php?logout='1'">logout</a></li>
			</ul>
			</div>
			</nav> 

	
<hr><br>
<body>

<hr><h2>find a patent</h2><hr>

<form method="post"  action="Gre.php">
<span>Enter Sr No </span>
<input  name="id" id="id" placeholder="id" value=0>
<div>
<button type="submit"  name="Gre.php">Submit</button>
</div>

<hr><h3>Basic Details</h3>
			<div style="overflow-x: auto;">
         <table border="1">
         <tr>
                <th>sr</th>
                <th>CreatedBy</th>
                <th>CreatedAt</th>
                <th>Name</th>
                <th>Uid</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Dob</th>
			    <th>Maritial Status</th>
                <th>birth place</th>  
                <th>Gender</th>
                <th>Emergency contact</th>
                <th>Relation</th>
                <th>Address</th>
                <th>Contact</th>
			    <th>Insurance no</th>
                <th>Expiry Date</th>
                <th>Provider</th>
                <th>Contact</th>
                <th>Blood Group</th>
                <th>Alergies</th>
                <th>Doctor id</th>
                <th>Doctor name</th>
                <th>doctor qulification</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Height</th>
                <th>weight
                </th>
            </tr>
       <?php 
	   $output="0";
	   $db = mysqli_connect('localhost', 'demo', '123','healthanalysis');
	   $una=$_SESSION['username'];
	   $sql  = "SELECT * FROM ehr where CreatedBy ='$una'";
		$result = mysqli_query($db, $sql);
			while($row = mysqli_fetch_assoc($result)) 
			{?>
			
            <tr>
                <td><?php $pid=$row['sr'];  echo $row['sr']; ?></td>
                <td><?php echo $row['CreatedBy']; ?></td>
                <td><?php echo $row['CreatedAt']; ?></td>
                <td><?php echo $row['FName'] ;?></td>
                <td><?php echo $row['Uid'] ;?></td>
                <td><?php echo $row['Addre'] ;?></td>
                <td><?php echo $row['Phone'] ;?></td>
                <td><?php $Dob=$row['Dob'] ; echo $row['Dob'] ;  ?></td>
			    <td><?php echo $row['Mt']; ?></td>
                <td><?php echo $row['birPla']; ?></td>  
                <td><?php $Gender=$row['Gender'] ; echo $row['Gender'] ;?></td>
                <td><?php echo $row['emrName'] ;?></td>
                <td><?php echo $row['emrRel'] ;?></td>
                <td><?php echo $row['emrAdd'] ;?></td>
                <td><?php echo $row['emrPhone'] ;?></td>
		    	<td><?php echo $row['insNo']; ?></td>
                <td><?php echo $row['expPoDate']; ?></td>
                <td><?php echo $row['poPro']; ?></td>
                <td><?php echo $row['insPhone'] ;?></td>
                <td><?php echo $row['BG'] ;?></td>
                <td><?php echo $row['Alg'] ;?></td>
                <td><?php echo $row['did'] ;?></td>
                <td><?php echo $row['dName'] ;?></td>
                <td><?php echo $row['dQal'] ;?></td>
                <td><?php echo $row['dPhone'] ;?></td>
                <td><?php echo $row['dadd'] ;?></td>
                <td><?php echo $row['Hei'] ;?></td>
                <td><?php echo $row['Wei'] ;?></td>
            </tr>
       <?php
             }
             ?>
             </table>     
             <?php    //calculating Age
                $dob = new DateTime($Dob);
                $now = new DateTime();
                $difference = $now->diff($dob);
                $age = $difference->y;?>
		<!-- Pridiction Data in-->
		<hr><hr>Your heart Details<hr>
		<form method="post"  action="Dashbord.php" >
          <table width="100%" border=1px style="overflow-x: auto;">
            <tr>
              <th width=2% height="30">PatientID </th>
              <th>Age</th>
              <th>Sex</th>
              <th>ChestPainType</th>
              <th>BloodPressure</th>
              <th>Cholesterol</th>
              <th>BloodSugar</th>
              <th>EC_Results</th>
              <th>Max heart Rate </th>
              <th>Angina</th>
              <th>OldPeak</th>
              <th>PeakSlope</th>
              <th>MajorVessels</th>
              <th>Thal</th>
            </tr>
            <?php
             $db = mysqli_connect('localhost', 'demo', '123','healthanalysis');
             $sql  = "SELECT * FROM priid where PatientID ='$_POST[id]'";
              $result = mysqli_query($db, $sql);
                  while($row = mysqli_fetch_assoc($result)) 
                  {
                $PatientID=$row['PatientID'];	
	            $Age=$row['Age'];
            	$Sex=$row['Sex'];	
            	$ChestPainType=$row['ChestPainType'];	
                $BloodPressure=$row['BloodPressure'];	
            	$Cholesterol=$row['Cholesterol'];	
	            $BloodSugar=$row['BloodSugar'];	
            	$EC_Results=$row['EC_Results'];
            	$MaxHeartRate=$row['MaxHeartRate'];	
	            $Angina	=$row['Angina'];
            	$OldPeak=$row['OldPeak'];
	            $PeakSlope=$row['PeakSlope'];
	            $MajorVessels=$row['MajorVessels'];	
	            $Thal=$row['Thal'];}
    ?>
  <td width=2%> 
   <input name="PatientID" id= 'PatientID' value="<?php echo $PatientID ?>">
  </td>
    <td>
        <input name="Age" id= 'Age' value=" <?php echo $age ?>">
    </td>
    <td>
    <div>
      <input id="55" type="radio" name="Sex" value="0"  <?php if($Sex==='0') echo 'checked="checked"';?>>
        <label> Male </label>
  </div>
      <div>
        <input  id="radio56" type="radio" name="Sex" value="1" <?php if($Sex==='1') echo 'checked="checked"';?>>
        <label> Female </label>
      </div>
 
      </td>
    <td><div>
    <select name="ChestPainType">
    <option value="1" <?php if($ChestPainType==='1') echo 'selected="selected"';?>>No</option>
    <option value="2" <?php if($ChestPainType==='2') echo 'selected="selected"';?>>Low</option>
    <option value="3" <?php if($ChestPainType==='3') echo 'selected="selected"';?>>Mid</option>
    <option value="4" <?php if($ChestPainType==='4') echo 'selected="selected"';?>>High</option>
    </select>
      </div>
   </td>
    <td>
      <input name="BloodPressure" id= 'BloodPressure' placeholder="Enter Your BloodPressure" value="<?php echo $BloodPressure;?>">
    </td>
    <td>
      <input type="number" name="Cholesterol" id= 'Cholesterol' placeholder="Enter Your Cholesterol" value="<?php echo $Cholesterol;?>">
    </td>
    <td><div>
      <input id="radio17" type="radio" name="BloodSugar" value="0"  <?php if($BloodSugar==='0') echo 'checked="checked"';?>>
        <label> absent </label>
  </div>
      <div>
        <input  id="radio18" type="radio" name="BloodSugar" value="1" <?php if($BloodSugar==='1') echo 'checked="checked"';?>>
        <label> Present </label>
      </div></td>
    <td>
      <input type="number" name="EC_Results" id= 'EC_Results' placeholder="Enter Your EC_Results" value="<?php echo $EC_Results;?>">
    </td>
    <td>
      <input type="number" name="MaxHeartRate" id= 'MaxHeartRate' placeholder="Enter Your MaxHeartRate" value="<?php echo $MaxHeartRate;?>">
    </td>
    <td><div>
      <div>
        <input  id="radio19" type="radio" name="Angina" value="0" <?php if($Angina==='0') echo 'checked="checked"';?>>
        <label> present </label>
    </div>
      <div>
        <input  id="radio20" type="radio" name="Angina" value="1" <?php if($Angina==='1') echo 'checked="checked"';?>>
        <label> absent </label>
      </div>
    </div></td>
    <td>
      <input  type="number" step="0.01" name="OldPeak" id= 'OldPeak' placeholder="Enter Your OldPeak" value="<?php echo $OldPeak;?>">
    </td>
    <td>
      <input  type="number" name="PeakSlope" id= 'PeakSlope' placeholder="Enter Your PeakSlope" value="<?php echo $PeakSlope;?>">
    </td>
    <td>
      <input type="number" name="MajorVessels" id= 'MajorVessels' placeholder="MajorVessels Effected" value="<?php echo $MajorVessels; ?>">
    </td>
    <td>
      <input type="number" name="Thal" id= 'Thal' placeholder="Thal" value="<?php echo $Thal;?>">
    </td>
	 <td><button type="submit" name="r_up">Submit</button></td>
          </table>
          
</form>
</body>
</html>