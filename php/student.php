<?php
	$students=array("Athira","Bamily","Emily","David","Hanan","Akhila","Aseela","Basith","Farhan","Ganga");
	print_r($students);
	echo "</br>";	
	print_r ("Sorted Array");
	echo "</br>";	
	asort($students);
	print_r($students);
	echo "</br>";	
	print_r("Sorted in Descending order");
	echo "</br>";
	arsort($students);
	print_r($students);
?>