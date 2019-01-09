<?php
$arrayName = array("a", "e","i","o","u" );

for($x=0; $x<7	; $x++)
{
	for($j = 7- $x; $j >1; $j--)
	{
		echo "&nbsp";
	}
	for($y=0; $y<=$x; $y++)
	{
		if(($x%2)==0)
		{
		echo " * ";
		}
		else
		{
			for($y=0; $y<$x; $y++)
				echo $arrayName[$y];
		}
	}
		
	echo "<br>";
}
?>