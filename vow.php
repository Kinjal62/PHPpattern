<?php

$arr = [];

$arrayName =array(65,69,73,79,85);

for ($i=65; $i < 91 ; $i++) { 
	array_push($arr,$i);
}
$count = 0;


for($i=0; $i< 6; $i++)
{
	for($j=0; $j<=$i;$j++)
	{
		echo (in_array($arr[$count], $arrayName)) ? chr($arr[$count]) : "*";
		/*{
			echo chr($arr[$count]);
		}else{
			echo "*";
		}*/
	if ($count == 26) {
			$count = 0;
		}
		else{
			$count = $count + 1;		
		}

	}
	echo "<br>";
}
?>