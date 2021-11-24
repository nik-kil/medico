<?php


	include_once('db.php');
	
	$name=$_REQUEST['name'];
	$mobno=$_REQUEST['mobno'];
	$pwd=$_REQUEST['pwd'];
	$addr=$_REQUEST['addr'];
	
	
	$sque=$_REQUEST['sque'];
	$ans=$_REQUEST['ans'];
	
	$sql="select * from signup where mobno='$mobno'";
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	if( $row )
	{
	
	echo "1";
	return;
	
	}
	
	
	
	$sql="insert into signup values('$mobno','$name','$pwd','$addr','$sque','$ans')";
	$res=execute( $sql );
	echo "2";
	
	
	/*
	session_start();
	$_SESSION['mobno']=$mobno;
	$_SESSION['name']=$name;
	$_SESSION['count']=0;
   */

?>