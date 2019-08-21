<?php 
if (isset($_POST['prid'])){
	if(isset ($_POST['pre']))
	{
		$a=$_POST['pre'];
	}
	else
	{
	$a=$_POST['id'];
	}
$py="python";
$loc=" C:\\xampp\\htdocs\\be\\t1.py ";
$cmd=$py.$loc.$a;
echo "$cmd";
shell_exec($cmd);
}	



?>