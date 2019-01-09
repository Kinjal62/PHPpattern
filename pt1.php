<?php
$num=65;
for($x=0; $x<10; $x++)
{
	for($j = 10- $x; $j >1; $j--)
	{
		echo "&nbsp&nbsp";
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
	echo "<br>";
}
?>