<?php

	include_once('adminnavbar.php');
	include_once('db.php');
	
	$id=$_REQUEST['id'];
	$flag=$_REQUEST['flag'];
	
	
	if( $flag==1 )
	{
	$sql="update vendors set approved=0 where vendor_id=$id";
	$message="Blocked";
	}
	else
	{
	$sql="update vendors set approved=1 where vendor_id=$id";
	$message="Approved";
	}
	
	$res=execute( $sql );
		
		echo "<div class='container bg-info text-danger'><center><h1>User has been $message </h1><br/><br/><a href=viewvendors.php>Return</a></center></div>";
		exit(0);
?>