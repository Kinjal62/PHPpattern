<?php
$alpha = range('A','Z');

for($x=0; $x <= 7; $x++)
{
	for($y=0; $y <=$x; $y++)
	{
		echo $alpha[$x];
		echo " ";
	}
	echo "<br>";
}
?>
