<?php
$num=65;
for($x=0; $x <= 6; $x++)
{
	for($y=0; $y <=$x; $y++)
	{ 
		$ch = chr($num);
		echo $ch." ";
		$num=$num + 1;
	}
	echo "<br>";
}
?>