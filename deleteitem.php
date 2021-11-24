<?php


	
	include_once('vendornavbar.php');
	include_once('db.php');
	
	$sino=$_REQUEST['slno'];
	
	$sql="delete from items where slno=$sino";
	
	$res=execute( $sql );
	
	echo "<center><h1>Record has been deleted</h1></center>";
	
	

?>