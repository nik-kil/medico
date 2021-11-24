
	<html>
	
	<head>
	
	<title>Factorial </title>
	
	
	<style>
	
		h1{
				color:red;
				font-family:Calibri;
			}
	
	    body{
			
			background-color:lightblue;
		}
	</style>
	
	</head>
	
	<body>
	<?php
		
	
		$num=$_REQUEST['t1'];
		$fact=1;
		
		for($i=1; $i<=$num; $i++ )
		{
		$fact=$fact*$i;
		}
		
		echo "<center><h1>Factorial of $num = $fact</h1></center>";
	
	?>
	
	</body>
	
	</html>