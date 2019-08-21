<?php  include('server.php') ?>
<?php include('prin.php') ?>
<?php include('a.php') ; ?>


<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashbord</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
	 <div id="wrapper">
	 <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
             <a class="navbar-brand" href="D_dashbord.php" style="color: white; padding: 15px 50px 0px 50px; float: right; font-size: 25px;">Health Pridiction </a> 
           
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
<a href="dashbord.php?logout='1'" class="btn btn-danger square-btn-adjust">Go to Home</a> </div>
      
           <!-- /. NAV TOP  -->
		  
			<p style="color: white">Welcome</p>	
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    <li>
                        <a  class="active-menu" href="find_rec.php"><i class="fa fa-qrcode fa-3x"></i>Find Patient</a>
                    </li>
                </ul>
            </div>        
        </nav>   


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="wrap-contact100">
				
                  

<hr><h2>find a Patient</h2><hr>

<form method="post"  action="find_rec.php">
<span>Enter Sr No </span>
<input  name="id" id="id" placeholder="id" value=0>
<div>
<button type="submit"  name="find_rec.php">Submit</button>
</div>

<hr> <div class="panel panel-default" style="overflow-x: auto;">
                        <div class="panel-heading">
                            Your Records
                        </div>
				 <div class="panel-body" >
			
				  <table border="1" class=" table-responsive table table-striped table-bordered table-hover">
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
	   
	   $sql  = "SELECT * FROM ehr where sr ='$_POST[id]'";
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
			 </div>   
			 </div>   
             <?php    //calculating Age
                $dob = new DateTime($Dob);
                $now = new DateTime();
                $difference = $now->diff($dob);
                $age = $difference->y;?>
		<!-- Pridiction Data in-->
		<hr>
		<div class="panel panel-default" style="overflow-x: auto;">
                        <div class="panel-heading">
                            Your Heart Records
                        </div>
				 <div class="panel-body" >
			
				  <table border="1" class=" table-responsive table table-striped table-bordered table-hover">
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
	
          </table>
          
</form>
</body>
</html>