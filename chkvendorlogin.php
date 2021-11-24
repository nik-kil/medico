<?php

	include_once('db.php');
	
	$uname=$_REQUEST['uname'];
	$pwd=$_REQUEST['pwd'];
	
	
	$sql="select * from vendors where( user_name='$uname' and pwd='$pwd')";
	
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	if( $row->approved==0 )
	echo "2";
	else
	{
			if( $row )
			{
			
				session_start();
				$_SESSION['vendor_name']=$row->vendor_name;
				$_SESSION['user_name']=$row->user_name;
				$_SESSION['trade_name']=$row->bunsiness_name;
				$_SESSION['vendor_id']=$row->vendor_id;
				echo "1";
			}
			else
			{
				echo "0";
			}
	}
?>