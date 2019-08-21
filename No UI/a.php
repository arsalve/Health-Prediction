<?php 
if (isset($_POST['prid'])){
$a=$_POST['pre'];
	
$py="python";
$loc=" C:\\xampp\\htdocs\\be\\t1.py ";
$cmd=$py.$loc.$a;
echo "$cmd";
shell_exec($cmd);
}	



?>