<?php

	include_once('vendornavbar.php');
	include_once('db.php');
	
	
	$vid=$_REQUEST['vid'];
	$order_id=$_REQUEST['order_id'];
	$mobno=$_REQUEST['mobno'];
	
	
	
	$sql="update orders set status='delivered' where order_id='$order_id'";
	
	$res=execute( $sql );
	
	echo "<div class='bg-info'>";
	echo "<center><h1>Records got updated</h1></centre>";
	echo "</div>";
	
	
		
	
	
	
		
	
	
	
	
	
	
	
	
	
	
	
	
?>