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

</head>
<body>
	 <div id="wrapper">
	 <nav class="navbar navbar-default navbar-cls-top " role="navigation" >
            <div class="navbar-header">
                 <a class="navbar-brand" href="D_dashbord.php" style="color: white; padding: 15px 50px 0px 50px; float: right; font-size: 25px;">Health Pridiction </a> 
            </div>
   <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
<a href="dashbord.php?logout='1'" class="btn btn-danger square-btn-adjust">Logout</a> </div>
      
           <!-- /. NAV TOP  -->
		   <?php  if (isset($_SESSION['username'])) : ?>
			<p style="color: white">Welcome <strong> DR. <?php echo $_SESSION['username']; endif;?></strong></p>	
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>		
                    <li>
                        <a class="active-menu"  href="D_dashbord.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="DocEhr.php"><i class="fa fa-desktop fa-3x"></i> Create a Record</a>
                    </li>
                    <li>
                        <a   href="Gre.php"><i class="fa fa-qrcode fa-3x"></i>Find Patient</a>
                    </li>
						   <li>
                        <a   href="DModifyEhr.php"><i class="fa fa-bar-chart-o fa-3x"></i> Modify a Record</a>
                    </li>	
                </ul>
               
            </div>        
        </nav>   


        <div id="page-wrapper">
            <div id="page-inner">
                <div class="wrap-contact100">
				
                    <div class="col-md-12">
                     <h2> Dashboard</h2>   
                        <h3><?php echo  "Welcome "; echo $_SESSION['username']; ?></h3>
                    </div>
                </div>              
                 <!-- /. ROW  -->
				  <form method="post"  action="D_dashbord.php">
		<span>Enter Sr No </span>
		<input  name="id" id="id" placeholder=" " value=" ">
		<div>				
		<input id="s1" type="radio" name="s" value="1" checked="checked">
		all Records
		</div>
		<div>				
		<input id="s2" type="radio" name="s" value="0" checked="checked">
		Find A record
		</div>
		<button type="submit" name="D_dashbord.php">Submit</button>
		
	<?php 
if ($_POST['s']==1):
?>
		
		
		
		 <div class="panel panel-default" style="overflow-x: auto;">
                        <div class="panel-heading">
                            Your Records
                        </div>
				 <div class="panel-body" >
				
				  <table border="1" class=" table-responsive table table-striped table-bordered table-hover">
		  <tr>
                <th>sr</th>
                <th>CreatedBy</th>
                <th>CreatedAt</th>
                <th>FName</th>
                <th>Uid</th>
                <th>Addre</th>
                <th>Phone</th>
                <th>Dob</th>
				<th>Mt</th>
                <th>birPla</th>  
                <th>Gender</th><br>
                <th>emrName</th>
                <th>emrRel</th>
                <th>emrAdd</th>
                <th>emrPhone</th>
				<th>insNo</th>
                <th>expPoDate</th>
                <th>poPro</th>
                <th>insPhone</th>
                <th>BG</th>
                <th>Alg</th>
                <th>did</th>
                <th>dName</th>
                <th>dQal</th>
                <th>dPhone</th>
                <th>dadd</th>
                <th>Hei</th>
                <th>Wei</th>
            </tr>
       <?php 
	   $db = mysqli_connect('localhost', 'demo', '123','healthanalysis');
	   $una=$_SESSION['username'];
	   

				$sql  = "SELECT * FROM doctor where Username ='$una'";
				$result = mysqli_query($db, $sql);
				while($row = mysqli_fetch_assoc($result)) 
				{
					$did=$row['did'] ;
					
				}
	   
	   
	   
	   $sql  = "SELECT * FROM ehr where did ='$did'";
		$result = mysqli_query($db, $sql);
			while($row = mysqli_fetch_assoc($result)) 
			{?>
			
            <tr>
                <td><?php echo $row['sr']; ?></td>
                <td><?php echo $row['CreatedBy']; ?></td>
                <td><?php echo $row['CreatedAt']; ?></td>
                <td><?php echo $row['FName'] ;?></td>
                <td><?php echo $row['Uid'] ;?></td>
                <td><?php echo $row['Addre'] ;?></td>
                <td><?php echo $row['Phone'] ;?></td>
                <td><?php echo $row['Dob'] ;?></td>
				<td><?php echo $row['Mt']; ?></td>
                <td><?php echo $row['birPla']; ?></td>  
                <td><?php echo $row['Gender'] ;?></td><br>
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
			
		<?php else: ?>
		 <div class="panel panel-default" style="overflow-x: auto;">
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
                <th>Gender</th><br>
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
	   $db = mysqli_connect('localhost', 'demo', '123','healthanalysis');
	   
	   $sql  = "SELECT * FROM ehr where sr ='$_POST[id]'";
		$result = mysqli_query($db, $sql);
			while($row = mysqli_fetch_assoc($result)) 
			{?>
			
            <tr>
                <td><?php echo $row['sr']; ?></td>
                <td><?php echo $row['CreatedBy']; ?></td>
                <td><?php echo $row['CreatedAt']; ?></td>
                <td><?php echo $row['FName'] ;?></td>
                <td><?php echo $row['Uid'] ;?></td>
                <td><?php echo $row['Addre'] ;?></td>
                <td><?php echo $row['Phone'] ;?></td>
                <td><?php echo $row['Dob'] ;?></td>
				<td><?php echo $row['Mt']; ?></td>
                <td><?php echo $row['birPla']; ?></td>  
                <td><?php echo $row['Gender'] ;?></td><br>
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
             } endif
             ?>
             </table>
        </div>
            </div>
</body>
</html>