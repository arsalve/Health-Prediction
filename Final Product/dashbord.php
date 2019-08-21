<?php include('server.php') ?>
<?php include('prin.php') ?>
<?php include('a.php') ; 
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


<html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashbord</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
   
</head>
<body>
   <div id="wrapper">
	 <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header"> 
            <a class="navbar-brand" href="dashbord.php" style="color: white; padding: 15px 50px 0px 50px; float: right; font-size: 25px;">Health Pridiction </a> 
            </div>
   <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
<a href="dashbord.php?logout='1'" class="btn btn-danger square-btn-adjust">Logout</a> </div>
      
           <!-- /. NAV TOP  -->
		    <?php  if (isset($_SESSION['username'])) : ?>
			<p style="color: white;">Welcome <strong><?php echo $_SESSION['username']; endif;?>&nbsp;</strong></p>	
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="dashbord.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="createEHR.php"><i class="fa fa-desktop fa-3x"></i> Create a Record</a>
                    </li>
                    <li>
                        <a  href="minfo.php"><i class="fa fa-qrcode fa-3x"></i> More information</a>
                    </li>
						   <li>
                        <a   href="ModifyEhr.php"><i class="fa fa-bar-chart-o fa-3x"></i> Modify a Record</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
		
		<!-- notification message -->
		
	
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="wrap-contact100">
				
                    <div class="col-md-12">
                     <h2> Dashboard</h2>   
                        <h3><?php echo  "Welcome "; echo $_SESSION['username']; ?></h3>
                    </div>
                </div>              
                 <!-- /. ROW  -->
				  <div class="panel panel-default" style="overflow-x: auto;">
                        <div class="panel-heading">
                            Your Records
                        </div>
				 <div class="panel-body" >
				  <div>
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
            </div>
			</div>
			</div>

			
			<?php //calculating Age
                $dob = new DateTime($Dob);
                $now = new DateTime();
                $difference = $now->diff($dob);
                $age = $difference->y;?>
				
                  <hr />
                 <!-- /. ROW  -->
				  <div class="panel panel-default" style="overflow-x: auto;">
                        <div class="panel-heading">
                          Pridiction System
                        </div>
				 <div class="panel-body" >
				  <div> 
				  <form method="post"  action="dashbord.php">
				  <table border="1" class=" table-responsive table table-striped table-bordered table-hover">
				 
				 <tr>
              <th width=2%>PatientID </th>
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
          
             $sql  = "SELECT * FROM priid where PatientID ='$pid'";
              $result = mysqli_query($db, $sql);
                  while($row = mysqli_fetch_assoc($result)) 
                  {
              
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
   <input name="PatientID" id= 'PatientID' value="<?php echo $pid ?>">
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
    </td><th><button type="submit" name="r_up">Submit</button></th>
				 </table></form>
            </div>
			</div>
			</div>
		
                <hr />                
               
                 <!-- /. ROW  -->
                <form method="post"  action="Dashbord.php">
       <input  name="pre" id= 'pre' value="<?php echo $pid; ?>" >
     <button type="submit" name="prid">Genrate Prediction</button>
</form>

<?php 

 $db = mysqli_connect('localhost', 'demo', '123','healthanalysis');
	   $una=$_SESSION['username'];
	   $iid=$_POST['pre'];
	   //echo "iid is";
	  // echo $iid;
	   $sql  = "SELECT * FROM predi where PatientID ='$iid'";
		$result = mysqli_query($db, $sql);
			$row = mysqli_fetch_assoc($result) ;
			 $out= $row['result'] ;
			 $t1=$row['t1'];
			 $t2=$row['t2'];
			 $t3=$row['t3'];
			 $t4=$row['t4'];
			 //Converting result to text
			 if ($t1==2){
				 $rt1="Positive";
			 }
			else{
				 $rt1="Negative";
			}
			
			 if ($t2==2){
				 $rt2="Positive";
			 }
			else{
				 $rt2="Negative";
			}
			 if ($t3==2){
				 $rt3="Positive";
			 }
			else{
				 $rt3="Negative";
			}
			 if ($t4==2){
				 $rt4="Positive";
			 }
			else{
				 $rt4="Negative";
			}
			
			 
		if ($out==2){
    
	echo "<h1>Positive  your heart may ran into trubble so you can do</h1> <a href=minfo.php> Click Here For more information on Heart</a> <br>";
	// printing output of each algorithem 
	?>
	 <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $rt1; ?></p>
                    <p class="text-muted">1st Cycle</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $rt2; ?></p>
                    <p class="text-muted">2nd Cycle</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $rt3; ?></p>
                    <p class="text-muted">3rd Cycle</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $rt4; ?></p>
                    <p class="text-muted">4th Cycle</p>
                </div>
             </div>
		     </div>
			</div>
	
<?php		
}
elseif ($out==1){
	echo "<h1>Negative Your heart is looks fine </h1>";
	?>
	 <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $rt1; ?></p>
                    <p class="text-muted">1st Cycle</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $rt2; ?></p>
                    <p class="text-muted">2nd Cycle</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $rt3; ?></p>
                    <p class="text-muted">3rd Cycle</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $rt4; ?></p>
                    <p class="text-muted">4th Cycle</p>
                </div>
             </div>
		     </div>
			</div>
	<?php 
}
else{
	echo "<h1>Click On Genrate</h1>";
}
	

?>			    
            
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
