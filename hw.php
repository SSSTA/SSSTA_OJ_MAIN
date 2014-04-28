<?php
	require_once("./include/my_func.inc.php");
	echo "Hello World";
	$s=$_GET['id'];
	echo $s."->";
	$m = preg_match("/^team([0-9]|[1-9][0-9])$/",$s);
	if($m == false)
	{
		echo "FALSE\n";
	}
	else
	{	
		echo $m;
	}
?>
