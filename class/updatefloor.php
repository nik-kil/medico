
	<?php
	
		include_once('db.php');
		
		$hfid=$_REQUEST['hfid'];
		$fid=$_REQUEST['floor_id'];
		$fname=$_REQUEST['floor_name'];
		
		$sql="update floors set floor_id=$fid,floor_name='$fname' where floor_id=$hfid";
		
		$res=execute( $sql );
		
		echo "<center><h2>Modified..</h2><br/><a href=displayfloors.php>REturn</a></center>";
		
	?>