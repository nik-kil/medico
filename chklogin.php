<?php


	include_once('db.php');
	
	
	$mobno=$_REQUEST['mobno'];
	$pwd=$_REQUEST['pwd'];
	
	
	$sql="select * from signup where mobno='$mobno' and pwd='$pwd' ";
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	if( $row )
	{
	
	
	echo "2";
	
	session_start();
	$_SESSION['mobno']=$mobno;
	$_SESSION['name']=$row->name;
	
	
	
	$sql="select count(*) as cnt from orders where customer_mobno='$mobno' and status='selected' ";
	$res=execute( $sql );
	$row=$res->fetch_object();
	
	$_SESSION['count']=$row->cnt;
	
	
	}
	else
	{
		echo "1";
	
	}
	
	
	
	
	
	

?>