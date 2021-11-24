<?php


	
	include_once('vendornavbar.php');
	include_once('db.php');
	
	$sino=$_REQUEST['sino'];
	
	$sql="delete from offers where sino=$sino";
	
	$res=execute( $sql );
	
	echo "<center><h1>Record has been deleted</h1></center>";
	
	

?>