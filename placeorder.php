<?php


	//session_start();
	
		
	include_once('navbar.php');
	
	$_SESSION['count']=0;
	include_once('db.php');
	
	$vid=$_REQUEST['vid'];
	
	
	$sql="select * from vendors where vendor_id=$vid";
	$res=execute( $sql );
	$row=$res->fetch_object();
	$vmobno=$row->contno;
	
	$amount=$_REQUEST['amount'];
	
	$order_id="$vid-".rand(10000,20000)."-".$mobno;

	$sql="update orders set status='ordered',order_id='$order_id' where customer_mobno='$mobno' and status='selected'";
	$res=execute( $sql );
	
	echo "<center><h2>Thank You,Your order Has been accepted</h2></center>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>