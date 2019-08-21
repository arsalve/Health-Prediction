<?php
$query="";
$FName="";
$conn = mysqli_connect('localhost', 'demo', '123','healthanalysis');
	//echo "<script type='text/javascript'>alert('Connected');</script>";}
	// insert data into database
	if (isset($_POST['d_ins'])){
		// receive all input values from the form
		$FName =$_POST['Name'];
		$query = "INSERT INTO temp (name)values($FName)";
		
	mysqli_query($conn, $query);
/*	if (mysqli_query($db, $query)) {
	echo "<script type='text/javascript'>alert('Updated');</script>";}*/
	}
	mysqli_close($conn);
	 
	?>