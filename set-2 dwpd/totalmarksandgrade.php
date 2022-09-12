
<?php
	$total=0;
	$student=array("aafi malek "=>array("PHP"=>70,"JAVA"=>69,"CNS"=>66,"CMTS"=>67));
	foreach($student as $key=>$value)
	{
		echo "<h1>$key<br>";
		foreach($value as $key=>$value)
		{
			$total=$total+$value;
			$avg=$total/4;
		}
		echo "Total marks is :$total<br>";
		echo "Avarage is :$avg<br>";
		if($avg >= 75){
			echo "Grade is A<br>";
		}
		elseif($avg >= 60){
			echo "Grade is B<br>";
		}
		elseif($avg >= 50){
			echo "Grade is C<br>";
		}
		elseif($avg >= 35){
			echo "Grade is D<br>";
		}
		else
			echo "You Are Failed..........<br>";
	}
	echo "206250307018 aafi";
?>