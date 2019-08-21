<?php include('server.php') ?>
<?php
		$query="";
		$FName="";
		$Uid="";
		$Addre="";
		$Phone="";
		$Dob="";
		$Gender="";
		$Mt="";
		$birPla="";
		$emrName="";
		$emrRel="";
		$emrPhone="";
		$emrAdd="";
		$poPro="";
		$insNo="";
		$insPhone="";
		$expPoDate="";
		$BG="";
		$Alg="";
		$Hei="";
		$Wei="";
		$dName="";
		$dPhone="";
		$dQal="";
		$dadd="NULL";
		$CreatedBy="dr".$_SESSION['username'];
		$CreatedAt=date("Y-m-d h:i:sa");
		$conn = mysqli_connect('localhost', 'demo', '123','healthanalysis');
	//echo "<script type='text/javascript'>alert('Connected');</script>";
	// insert data into database
	if (isset($_POST['d_ins'])){
		// receive all input values from the form
		$FName =$_POST['FName'];
		$Uid=$_POST['Uid'];
		$Addre=$_POST['Addre'];
		$Phone=$_POST['Phone'];
		$Dob=$_POST['Dob'];
		$Gender=$_POST['Gender'];
		$Mt=$_POST['Mt'];
		$birPla=$_POST['birPla'];
		$emrName=$_POST['emrName'];
		$emrRel=$_POST['emrRel'];
		$emrPhone=$_POST['emrPhone'];
		$emrAdd=$_POST['emrAdd'];
		$poPro=$_POST['poPro'];
		$insNo=$_POST['insNo'];
		$insPhone=$_POST['insPhone'];
		$expPoDate=$_POST['expPoDate'];
		$BG=$_POST['BG'];
		$Alg=$_POST['Alg'];
		$Hei=$_POST['Hei'];
		$Wei=$_POST['wei'];
		$did=$_POST['did'];
		$dName=$_POST['dName'];
		$dPhone=$_POST['dPhone'];
		$dQal=$_POST['dQal'];
		$query ="INSERT INTO ehr(sr,CreatedBy,CreatedAt,FName,Uid,Addre,Phone,Dob,Mt,birPla,Gender,emrName,emrRel,emrAdd,emrPhone,insNo,expPoDate,poPro,insPhone,BG,Alg,did,dName,dQal,dPhone,dadd,Hei,Wei) 
					  VALUES (NULL,'$CreatedBy','$CreatedAt','$FName','$Uid','$Addre','$Phone','$Dob','$Mt','$birPla','$Gender','$emrName','$emrRel','$emrAdd','$emrPhone','$insNo','$expPoDate','$poPro','$insPhone','$BG','$Alg','$did','$dName','$dQal','$dPhone','$dadd','$Hei','$Wei')";
		
	mysqli_query($conn, $query);
	}
	mysqli_close($conn);
	 ;
?>