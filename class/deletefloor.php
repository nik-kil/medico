
	<?php
	
		$fid=$_REQUEST['fid'];
		
		include_once('db.php');
		
		$sql="delete from floors where floor_id=$fid";
		
		$res=execute( $sql );
		
		echo "<center><h2>Ok deleted,<a href='displayfloors.php'>Return</a></h2></center>";
		
	?>