<?php include('server.php') ?>
<?php include('a.php') ?>
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
  display:table-cell;
   width: 10%; 
   height: 15%
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
  
  
}</style>
</head>
<body>
	<div class="header">
		<h2>Home Page</h2>
	</div>


		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : 
			
					
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					
		 endif 
		 ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
        <p style="color: white;">Welcome Dr. <strong><?php echo $_SESSION['username']; endif;?>&nbsp;</strong></p>	
            <!-- navigation bar-->
            <nav>
			<div id="dnavigation">
			<ul>
			<li><a href="D_dashbord.php">Home</a></li>
			<li><a href="Dataform/DocEhr.php">Create a Record</a> </li>
			<li><a href="Gre.php">find a patent</a></li>
			<li><a href="Dataform/ModifyEhr.php">update record</a> </li>
			<li><a href="dashbord.php?logout='1'">logout</a></li>
			</ul>
			</div>
			</nav> <br><br><br><br><br>
		<?php endif?>
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
		</div>
	<?php 
if ($_POST['s']==1):
?>
		
		
		
		<div style="overflow-x: auto;">
         <table border="1">
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
             </table>
            </div>
<hr><hr><h1>DSS</h1>
<hr>
<form method="post"  action="D_dashbord.php">
       <input type="number" name="pre" id= 'pre' placeholder="prediction"   >
     <button type="submit" name="prid">Submit</button>
</form>

<?php 

 $db = mysqli_connect('localhost', 'demo', '123','healthanalysis');
	   $una=$_SESSION['username'];
	   $iid=$_POST['pre'];
	   echo "iid is";
	   echo $iid;
	   $sql  = "SELECT * FROM predi where PatientID ='$iid'";
		$result = mysqli_query($db, $sql);
			$row = mysqli_fetch_assoc($result) ;
			 $out= $row['result'] ;
			echo $out;
if ($out==2){
    
	echo "<h1>Positive  your heart may ran into trubble</h1>";
}
else{
	echo "<h1>Negative Your heart is looks fine </h1>";
}
	

?>

</body>
</html>