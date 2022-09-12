<?php
	$a=1;
	$b=1;
	$steps=7;
	echo "$a<br>";
	echo "$b<br>";
	for($i=1;$i<=$steps-2;$i++)
	{
		$c=$a+$b;
		echo "$c<br>";
		$a=$b;
		$b=$c;
	}
	echo "206250307018 aafi";
?>