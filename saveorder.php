<?php

	session_start();
	$mobno=$_SESSION['mobno'];
	
	include_once('db.php');
	
	$qty=$_REQUEST['qty'];
	$vid=$_REQUEST['vid'];
	$cost=$_REQUEST['cost'];
	$itemid=$_REQUEST['itemid'];
	$order_id="NIL";
	
	//$order_id="$vid-".rand(10000,20000)."-".$mobno;
	
	$sql="insert into orders(vid,itemid,qty,cost,customer_mobno,order_date,order_id,status) values($vid,$itemid,$qty,$cost,'$mobno',curdate(),'$order_id','selected')";
	
	$res=execute( $sql );
	
	
	$sql="select count(*) as cnt from orders where customer_mobno='$mobno'  and status='selected'";
	$res=execute( $sql );
	$row=$res->fetch_object();
	
	$_SESSION['count']=$row->cnt;
	
	echo $row->cnt;
	
	
?>