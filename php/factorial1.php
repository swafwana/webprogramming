<?php
	$num=5;
	$factorial=1;
	
	for($i=1;$i<=$num;$i++)
	{
		$factorial=$factorial*$i;
	}
	echo "Factorial of ".$num." is ".$factorial;
?>