
<?php

	include_once('db.php');
	
	$floor_id=$_REQUEST['floor_id'];
	
	//echo $floor_id;
	
	$sql="select * from floors where floor_id=$floor_id";
	
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	if( !$row )
	{
		echo "<center><h2>Sorry that floor doest not exist </h2></center>";
	}
	else
	{
		echo "<center><h3>Floor ID : $row->floor_id<br/>Floor Name : $row->floor_name";
	}
	
?>