<?php
for($x=0; $x<8; $x++)
{
	for($y=8; $y>$x; $y--)
	{
		echo "&nbsp";
	}
	for($k=1;$k<=$x;$k++)
	{
		echo "*";
	}
	echo "<br>";
}

?>

