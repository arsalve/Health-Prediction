<?php include('ins.php') ?>
<?php 

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Update Records </title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- Form Styles-->
   
   <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body>
 <div id="wrapper">
	 <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
   <a class="navbar-brand" href="dashbord.php">Health Pridiction </a> 
            </div>
   <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
<a href="dashbord.php?logout='1'" class="btn btn-danger square-btn-adjust">Logout</a> </div>
           <!-- /. NAV TOP  -->
		    <?php  if (isset($_SESSION['username'])) : ?>
			<p style="color: white">Welcome <strong><?php echo $_SESSION['username']; endif;?></strong></p>	
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a   href="dashbord.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a   href="createEHR.php"><i class="fa fa-desktop fa-3x"></i> Create a Record</a>
                    </li>
                    <li>
                        <a  href="minfo.php"><i class="fa fa-qrcode fa-3x"></i> More information</a>
                    </li>
						   <li>
                        <a class="active-menu"  href="ModifyEhr.php"><i class="fa fa-bar-chart-o fa-3x"></i> Modify a Record</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
		
                    
                       
                       <?php $db = mysqli_connect('localhost', 'demo', '123','healthanalysis');
	   $una=$_SESSION['username'];
	   $sql  = "SELECT * FROM ehr where CreatedBy ='$una'";
		$result = mysqli_query($db, $sql);
			while($row = mysqli_fetch_assoc($result)) 
			{ 
			
          
            	$pid=$row['sr'];  
                $CreatedBy =$row['CreatedBy']; 
                $CreatedAt=$row['CreatedAt']; 
                $FName =$row['FName'] ;
                $Uid =$row['Uid'] ;
                $Addre =$row['Addre'] ;
                $Phone =$row['Phone'] ;
                $Dob=$row['Dob'] ; 
			    $Mt =$row['Mt']; 
                $birPla =$row['birPla'];   
                $Gender=$row['Gender'] ; 
                $emrName =$row['emrName'] ;
                $emrRel =$row['emrRel'] ;
                $emrAdd =$row['emrAdd'] ;
                $emrPhone =$row['emrPhone'] ;
		    	$insNo =$row['insNo']; 
                $expPoDate =$row['expPoDate']; 
                $poPro =$row['poPro']; 
                $insPhone =$row['insPhone'] ;
                $BG =$row['BG'] ;
                $Alg =$row['Alg'] ;
                $did =$row['did'] ;
                $dName =$row['dName'] ;
                $dQal =$row['dQal'] ;
                $dPhone =$row['dPhone'] ;
                $dadd =$row['dadd'] ;
                $Hei =$row['Hei'] ;
				$Wei =$row['Wei'] ;}
	?>
    



			<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                       
                        <h3>Created by <?php echo $_SESSION['username']; echo "At $time;" ?> </h3>
                    </div>
                </div>
				
				<div class ="row">
				
					<form class="contact100-form" method="post"  action="ModifyEhr.php">
				<span class="contact100-form-title">
					Emergency Information
				</span>
                </span>
                <div class="wrap-input100 bg1">
					<span class="label-input100">Your PAtient ID *</span>
					<input class="input100" name="abc" id= 'abc' value="<?php echo $pid;?>">
				</div>

				<div class="wrap-input100 bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="FName" id= 'FName' value="<?php echo $FName;?>">
				</div>
				<div class="wrap-input100 ">
					<span class="label-input100">UID/AADHAR NO</span>
					<input class="input100" type="number" name="Uid" id= 'Uid' value="<?php echo $Uid;?>">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-alert-validate" data-validate = "Please Type Your Address">
					<span class="label-input100">Address</span>
					<textarea class="input100" name="Addre" id='Addre'><?php echo $Addre;?> </textarea>
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Contact</span>
					<input class="input100" type="Number" name="Phone" id='Phone' value="<?php echo $Phone;?>">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Date of Birth</span>
					<input class="input100" type="Date" name="Dob" id='Dob'value="<?php echo $Dob;?>">
					</div>
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">Gender</span>
						<div class="contact100-form-radio m-t-15 rs1-wrap-input100">
							<input class="input-radio100"  id="radio1" type="radio" name="Gender" value="Male"  <?php if($Gender==='Male') echo 'checked="checked"';?>>
							<label class="label-radio100" for="radio1">
							Male
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="Gender" value="Female" <?php if($Gender==='Female') echo 'checked="checked"';?>>
							<label class="label-radio100" for="radio2">
							Female
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="Gender" value="Other" <?php if($Gender==='Other') echo 'checked="checked"';?> >
							<label class="label-radio100" for="radio3">
							Other
							</label>
						</div>
						</div><br>
					<div class="wrap-contact100-form-radio ">
						<span class="label-input100">Maritial Status</span>
						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100"  id="radio4" type="radio" name="Mt" value="Marid" <?php if($Mt==='Marid') echo 'checked="checked"';?>>
							<label class="label-radio100" for="radio4">
							Married
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio5" type="radio" name="Mt" value="Unmarrid" <?php if($Mt==='Unmarrid') echo 'checked="checked"';?>>
							<label class="label-radio100" for="radio5">
							Unmarrid
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio6" type="radio" name="Mt" value="Other" <?php if($Mt==='Other') echo 'checked="checked"';?> >
							<label class="label-radio100" for="radio6">
							Other
							</label>
						</div>
					</div>
					<div class="wrap-input100 " >
						<span class="label-input100">Birthplace</span>
						<input class="input100" type="text" id="birPla" name="birPla" value="<?php echo $birPla;?>">
					</div>
					<br>
					<br>
					<h2>Emergency Contact Information</h2>
					<div class="wrap-input100 validate-input bg1" data-validate="Emergency Contact Name">
						<span class="label-input100">NAME *</span>
						<input class="input100" type="text" name="emrName" value="<?php echo $emrName;?>">
					</div>
					<div class="wrap-input100  bg1 rs1-wrap-input100" >
						<span class="label-input100">Relation </span>
						<input class="input100" type="text" id="emrRel" name="emrRel" value="<?php echo $emrRel;?>">
					</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100">
						<span class="label-input100">Phone</span>
						<input class="input100" type="number" id="emrPhone" name="emrPhone" value="<?php echo $emrPhone;?>">
					</div>
					<div class="wrap-input100 validate-input bg1 rs1-alert-validate" data-validate = "Please Type Your Address">
						<span class="label-input100">Address</span>
						<textarea class="input100" name="emrAdd" id='emrAdd'><?php echo $emrAdd;?></textarea>
					</div>
				<hr><hr>
					<h1>Policy Information</h1>
					<div class="wrap-input100 validate-input bg1" data-validate="Policy Name">
						<span class="label-input100">Provider </span>
						<input class="input100" type="text" name="poPro" id="poPro" value="<?php echo $poPro;?>">
					</div>
					<div class="wrap-input100 bg1 validate-input bg1" data-validate="Policy No">
						<span class="label-input100">Policy No</span>
						<input class="input100" type="text" id="insNo" name="insNo" value="<?php echo $insNo;?>">
					</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100">
						<span class="label-input100">Phone</span>
						<input class="input100" type="number" id="insPhone" name="insPhone" value="<?php echo $insPhone;?>">
					</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100 rs1-alert-validate" data-validate = "Please Type EXP DATE">
						<span class="label-input100">Exp. Date</span>
						<input class="input100" type="Date" name="expPoDate" id='expPoDate' value="<?php echo $expPoDate;?>">
						</div>
						<h1>Medical Details</h1>
						<div class="wrap-input100 input100-select bg1">
							<span class="label-input100">Blood Group</span>
							<div>
							<select class="js-select2" name="BG" id="BG" >
	    					<option <?php if($BG==='A Positive') echo 'selected="selected"';?> >A Positive</option>
	    					<option <?php if($BG==='A Negative') echo 'selected="selected"';?> >A Negative</option>
	    				
	    					<option <?php if($BG==='B Positive') echo 'selected="selected"';?> >B Positive</option>
	    					<option <?php if($BG==='B Negative') echo 'selected="selected"';?> >B Negative</option>
	    			
	    					<option <?php if($BG==='AB Positive') echo 'selected="selected"';?> >AB Positive</option>
	    					<option <?php if($BG==='AB Negative') echo 'selected="selected"';?> >AB Negative</option>
	    		
	    					<option <?php if($BG==='O Positive') echo 'selected="selected"';?> >O Positive</option>
	    					<option <?php if($BG==='O Negative') echo 'selected="selected"';?> >O Negative</option>
	    				
	    					<option <?php if($BG==='Unknown') echo 'selected="selected"';?> >Unknown</option>
							

							</select>
								<div class="dropDownSelect2"></div>
							</div>
						</div>
						<div class="wrap-input100 validate-input bg1" >
							<span class="label-input100">Known Alergies</span>
							<textarea class="input100" name="Alg" id="Alg" value="<?php echo $Alg;?>"></textarea>
						</div>
						<div class="wrap-input100 bg1 rs1-wrap-input100">
							<span class="label-input100">Height</span>
							<input class="input100" type="number" id="Hei" name="Hei" value="<?php echo $Hei;?>">
						</div>
						<div class="wrap-input100 bg1 rs1-wrap-input100">
							<span class="label-input100">weight</span>
							<input class="input100" type="number" id="Wei" name="Wei" value="<?php echo $Wei;?>">
						</div>
						
						
						<h1>Family Doc Information</h1>
						<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Docter ID </span>
						<input class="input100" type="text" name="did" id="did"value="<?php echo $did;?>">
					</div>
					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Name </span>
						<input class="input100" type="text" name="dName" id="dName" value="<?php echo $dName;?>">
					</div>
					<div class="wrap-input100 bg1 validate-input bg1">
						<span class="label-input100">Contact</span>
						<input class="input100" type="number" id="dPhone" name="dPhone" value="<?php echo $dPhone;?>">
					</div>
						
						<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Qualification </span>
						<input class="input100" type="text" name="dQal" id="dQal" value="<?php echo $dQal;?>">
					</div>
						
						
						<div class="container-contact100-form-btn">
							<button type="submit" class="contact100-form-btn" name="d_up">Update</button>
							
						</div>
			</form>
			
				
				
				</div>
				
         </div>
        </div>
       
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
 <!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
		<script>
			$(".js-select2").each(function(){
				$(this).select2({
					minimumResultsForSearch: 20,
					dropdownParent: $(this).next('.dropDownSelect2')
				});
				$(".js-select2").each(function(){
					$(this).on('select2:close', function (e){
						if($(this).val() == "Please chooses") {
							$('.js-show-service').slideUp();
						}
						else {
							$('.js-show-service').slideUp();
							$('.js-show-service').slideDown();
						}
					});
				});
			})
		</script>
	<!--===============================================================================================-->

		<script src="js/main.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
