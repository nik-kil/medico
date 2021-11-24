
	<?php
	
		
		//echo "Ok Connected to DB";
		
		include_once('db.php');
		
		$floor_id=$_REQUEST['floor_id'];
		$floor_name=$_REQUEST['floor_name'];
		
		
		$sql="insert into floors values($floor_id,'$floor_name')";
		
		$res=execute( $sql );
		
		echo "<center><h1>Floor details have been saved to Table</h1><br/><a href=floorform.php>RETURN</a></center>";
	
	?>