<?php
	$num=20;	
	$a=0;
	$b=1;
	echo "Fibanocci Series";
	for($i=2;$i<=$num;$i++)
	{
		$c=$a+$b;
		echo $a." ";
		$a=$b;
		$b=$c;
	}
?>