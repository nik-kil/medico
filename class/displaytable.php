
	<link rel="stylesheet" href="style.css" />
	
	<?php
	
		$num=$_REQUEST['t1'];
		$res=1;
		
		echo "<table border=1 align=center>";
		for($i=1; $i<=10; $i++ )
		{
		
			$res=$num*$i;
			
			echo "<tr>";
			echo "<td>$num</td><td>x</td><td>$i</td><td>=</td><td>$res</td>";
			echo "</tr>";
		}
	
		echo "</table>";
	
	?>