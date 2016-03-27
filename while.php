<?php
	
	echo "<h2>While (Looping)</h2>";
	$i = 1;
	$j = 0;
	while($i <= 5)
	{
		for($j=1;$j<=$i;$j++)
		{
			echo "$i";
		}
		echo "<br/>";
		$i++;
	}
	
?> 
