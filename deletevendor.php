<?php


	
	include_once('adminnavbar.php');
	include_once('db.php');
	
	$vendor_id=$_REQUEST['vendor_id'];
	
	$sql="select * from orders where vid='$vendor_id' and status='ordered' ";
	
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	
	if( $row )
	{
		echo "<div class='bg-info'><center><h2>Sorry it can't be deleted as it is having pending orders</h2><a href='viewvendors.php' class='btn btn-danger'>Back</a></center>";
		exit(0);
	}
	
	$sql="delete from vendors where vendor_id=$vendor_id";
	$res=execute( $sql );
	
	$sql="delete from items where vid=$vendor_id";
	$res=execute( $sql );
	
	$sql="delete from newarrivals where vendor_id=$vendor_id";
	$res=execute( $sql );
	
	
	$sql="delete from offers where vendor_id=$vendor_id";
	$res=execute( $sql );
	
	$sql="delete from orders where vid=$vendor_id";
	$res=execute( $sql );
	
	
	$sql="delete from reviews where vendor_id=$vendor_id";
	$res=execute( $sql );
	
	echo "<center><h1>Record has been deleted</h1></center>";
	

?>