<?php
$num=65;

for($x=0; $x<4; $x++)
{
	for($j = 4- $x; $j >1; $j--)
	{
		echo "__";
	}
	for($y=0; $y<=$x; $y++)
	{
		if(($x%2)==0)
		{
		echo " * ";
		}
		else
		{
			$ch=chr($num);
			echo $ch." ";
			$num=$num+1;
		}
	}
		for($k=0; $k<$x; $k++)
		{
			echo "__";
		}
	
	echo "<br>";
}
?>