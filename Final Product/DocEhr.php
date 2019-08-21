<?php include('insd.php') ?>
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

    <title>Create Records </title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
   <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
</head>
<body>
 <div id="wrapper">
  <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="D_dashbord.php">Health Pridiction </a> 
            </div>
  <div style="color: white;padding: 15px 50px 5px 50px;float: right;  font-size: 16px;"><a href="dashbord.php?logout='1'" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a   href="D_dashbord.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  class="active-menu"  href="DocEhr.php"><i class="fa fa-desktop fa-3x"></i> Create a Record</a>
                    </li>
                    <li>
                        <a   href="Gre.php"><i class="fa fa-qrcode fa-3x"></i>Find Patient</a>
                    </li>
						   <li>
                        <a  href="DModifyEhr.php"><i class="fa fa-bar-chart-o fa-3x"></i> Modify a Record</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
		
		<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                       
                        <h3>Created by <?php echo "Dr ".$_SESSION['username']; echo "At $time;" ?> </h3>
                    </div>
                </div>
				
				<div class ="row">
				
					<form class="contact100-form" method="post"  action="DocEhr.php">
				<span class="contact100-form-title">
					Emergency Information
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Enter Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="FName" id= 'FName' placeholder=" Enter Yor Name">
				</div>
				<div class="wrap-input100 ">
					<span class="label-input100">UID/AADHAR NO</span>
					<input class="input100" type="number" name="Uid" id= 'Uid' placeholder="Enter Your UID">
				</div>
				<div class="wrap-input100 validate-input bg1 rs1-alert-validate" data-validate = "Please Type Your Address">
					<span class="label-input100">Address</span>
					<textarea class="input100" name="Addre" id='Addre'placeholder="Enter Your Address here..."></textarea>
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100 validate-input bg1" data-validate="Enter Your Phone Number">
					<span class="label-input100">Contact</span>
					<input class="input100" type="Number" name="Phone" id='Phone' placeholder="Enter Contact Number ">
				</div>
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Date of Birth</span>
					<input class="input100" type="Date" name="Dob" id='Dob' placeholder="Enter Date of Birth ">
					</div>
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">Gender</span>
						<div class="contact100-form-radio m-t-15 rs1-wrap-input100">
							<input class="input-radio100"  id="radio1" type="radio" name="Gender" value="Male" checked="checked">
							<label class="label-radio100" for="radio1">
							Male
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="Gender" value="Female">
							<label class="label-radio100" for="radio2">
							Female
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="Gender" value="Other">
							<label class="label-radio100" for="radio3">
							Other
							</label>
						</div>
						</div><br>
					<div class="wrap-contact100-form-radio ">
						<span class="label-input100">Maritial Status</span>
						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100"  id="radio4" type="radio" name="Mt" value="Marid" checked="checked">
							<label class="label-radio100" for="radio4">
							Married
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio5" type="radio" name="Mt" value="Unmarrid">
							<label class="label-radio100" for="radio5">
							Unmarrid
							</label>
						</div>
						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio6" type="radio" name="Mt" value="Other">
							<label class="label-radio100" for="radio6">
							Other
							</label>
						</div>
					</div>
					<div class="wrap-input100 validate-input bg1" data-validate="Enter Your Birthplace">
						<span class="label-input100">Birthplace</span>
						<input class="input100"  type="text" id="birPla" name="birPla" placeholder="Enter Your Birthplace">
					</div>
					<br>
					<br>
					<h1>Emergency Contact Information</h1>
					<div class="wrap-input100 validate-input bg1" data-validate="Emergency Contact Name">
						<span class="label-input100">NAME *</span>
						<input class="input100" type="text" name="emrName" placeholder="Emergency Contact Name">
					</div>
					<div class="wrap-input100  bg1 rs1-wrap-input100" >
						<span class="label-input100">Relation </span>
						<input class="input100" type="text" id="emrRel" name="emrRel" placeholder="Enter Relation ">
					</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100">
						<span class="label-input100">Phone</span>
						<input class="input100" type="number" id="emrPhone" name="emrPhone" placeholder="Enter Emergency Phone">
					</div>
					<div class="wrap-input100 validate-input bg1 rs1-alert-validate" data-validate = "Please Type Your Address">
						<span class="label-input100">Address</span>
						<textarea class="input100" name="emrAdd" id='emrAdd'placeholder="Enter Your Address here..."></textarea>
					</div>
				<hr><hr>
					<h1>Policy Information</h1>
					<div class="wrap-input100 validate-input bg1" data-validate="Policy Name">
						<span class="label-input100">Provider </span>
						<input class="input100" type="text" name="poPro" id="poPro" placeholder="Insurance Provider">
					</div>
					<div class="wrap-input100 bg1 validate-input bg1" data-validate="Policy No">
						<span class="label-input100">Policy No</span>
						<input class="input100" type="text" id="insNo" name="insNo" placeholder="Enter Policy No">
					</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100">
						<span class="label-input100">Phone</span>
						<input class="input100" type="number" id="insPhone" name="insPhone" placeholder="Enter Phone no of provider">
					</div>
					<div class="wrap-input100 bg1 rs1-wrap-input100 rs1-alert-validate" data-validate = "Please Type EXP DATE">
						<span class="label-input100">Exp. Date</span>
						<input class="input100" type="Date" name="expPoDate" id='expPoDate' placeholder="Enter Date of Expiry ">
						</div>
						<h1>Medical Details</h1>
						<div class="wrap-input100 input100-select bg1">
							<span class="label-input100">Blood Group</span>
							<div>
								<select name="BG" id="BG">
	    					<option>A Positive</option>
	    					<option>A Negative</option>
	    					<option>B Positive</option>
	    					<option>B Negative</option>
	    					<option>AB Positive</option>
	    					<option>AB Negative</option>
	    					<option>O Positive</option>
	    					<option>O Negative</option>
	    					<option>Unknown</option>
							

							</select>
								<div class="dropDownSelect2"></div>
							</div>
						</div>
						<div class="wrap-input100 validate-input bg1" >
							<span class="label-input100">Known Alergies</span>
							<textarea class="input100" name="Alg" id="Alg" placeholder="Write Alergies"></textarea>
						</div>
						<div class="wrap-input100 bg1 rs1-wrap-input100">
							<span class="label-input100">Height</span>
							<input class="input100" type="number" id="Hei" name="Hei" placeholder="Enter Your Height">
						</div>
						<div class="wrap-input100 bg1 rs1-wrap-input100">
							<span class="label-input100">weight</span>
							<input class="input100" type="number" id="Wei" name="Wei" placeholder="Enter Your Height">
						</div>					
						<h1>Family Doc Information</h1>
						<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Docter ID </span>
						<input class="input100" type="text" name="did" id="did" placeholder="Docter Id">
					</div>
					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Name </span>
						<input class="input100" type="text" name="dName" id="dName" placeholder="Docter Name">
					</div>
					<div class="wrap-input100 bg1 validate-input bg1">
						<span class="label-input100">Contact</span>
						<input class="input100" type="number" id="dPhone" name="dPhone" placeholder="Enter Phone No">
					</div>						
						<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Qualification </span>
						<input class="input100" type="text" name="dQal" id="dQal" placeholder="Docter Qualification">
					</div>
						<div class="container-contact100-form-btn">
							<button type="submit" class="contact100-form-btn" name="d_ins">Submit</button>
							
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
