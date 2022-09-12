<?php
	$a=10;$b=5;
	$c=$a+$b;
	echo "<h1>Arithmetic Operators</h1>";
	echo "Addition is : $c <br>";
	$c=$a-$b;
	echo "Subtraction is : $c <br>";
	$c=$a*$b;
	echo "Multiplication is : $c <br>";
	$c=$a/$b;
	echo "Division is : $c <br>";
	$c=$a%$b;
	echo "Moduler is : $c <br>";
	$c=$a++;
	echo "Increment is : $c <br>";
	$c=$a--;
	echo "Decrement is : $c <br>";
	echo "<h1>Comparison Operators</h1>";
	echo var_dump($a == $b)."<br>";
	echo var_dump($a != $b)."<br>";
	echo var_dump($a > $b)."<br>";
	echo var_dump($a < $b)."<br>";
	echo var_dump($a >= $b)."<br>";
	echo var_dump($a <= $b)."<br>";
	echo "<h1>Logical Operators</h1>";
	$a=10;$b=0;
	if($a and $b){
		echo "Both are True <br>";
	}	
	else
		echo "Both are not True <br>";
	if($a or $b){
		echo "Both are True <br>";
	}	
	else
		echo "Both are not True <br>";
	if($a && $b){
		echo "Both are True <br>";
	}	
	else
		echo "Both are not True <br>";
	if($a || $b){
		echo "Both are True <br>";
	}	
	else
		echo "Both are not True <br>";
	if($a | $b){
		echo "Both are True <br>";
	}	
	else
	{
		echo "Both are not True <br>";
	}
	echo "Eno: 206250307018";
?>