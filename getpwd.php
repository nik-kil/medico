<?php


	include_once('db.php');
	
	
	$mobno=$_REQUEST['mobno'];
	
	
	$sque=$_REQUEST['sque'];
	$ans=$_REQUEST['ans'];
	
	$sql="select * from signup where mobno='$mobno' and sque='$sque' and answer='$ans' ";
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	if( $row )
	{
	
	echo "password is : <b>$row->pwd</b>";
	
	}
	else
	{
		echo "given data does not match, contact admin";
	}
	
	
	
	
?>