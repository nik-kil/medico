	<style>
	
	table{
	
	width:500px;
	border:2px solid black;
	}
	
	body{
	
	background-color:thistle;
	}
	th{
		
		background-color:maroon;
		color:white;
		padding:20px;
	}
	td{
	
		background-color:honeydew;
		padding:15px;
		font-weight:bold;
		font-family:Calibri;
	}
	
	img.del{
		width:20px;
		height:20px;
	}
	</style>
	
	<?php
	
	
		include_once('db.php');
		
		$sql="select * from floors";
		
		$res=execute( $sql );
		
		echo "<table align=center>";
		echo "<tr><th>Floor ID</th><th>Floor Name</th><th>Remove</th><th>Modify</th></tr>";
		while( $row=$res->fetch_object() )
		{
		
		echo "<tr>";
		echo "<td>$row->floor_id</td>";
		echo "<td>$row->floor_name</td>";
		echo "<td><a href=deletefloor.php?fid=$row->floor_id><img class='del' src='img/delete.png' /></a></td>";
		
		echo "<td><a href=editfloor.php?fid=$row->floor_id><img class='del' src='img/edit.jpg' /></a></td>";
		echo "</tr>";
		}
	
		echo "</table>";
	?>