
	<?php
		
		$fid=$_REQUEST['fid'];
		include_once('db.php');
		
		$sql="select * from floors where floor_id=$fid";
		$res=execute( $sql );
		
		$row=$res->fetch_object();
	
	?>


	<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
	
	<form name="f1" action="updatefloor.php" >
	
	
	<input type="hidden" name="hfid" value=<?php echo $fid ?> />
	<table align="center" >

	<tr>
	<td>Enter Floor ID</td>
	<td>
	<input type="text" name="floor_id" placeholder="Ex: 20 " required=required value=<?php echo $row->floor_id ?> />
	</td>
	</tr>

	<tr>
	<td>Enter Floor Name</td>
	<td>
	<textarea name="floor_name" placeholder="Ex: Ground Floor " required=required><?php echo $row->floor_name ?></textarea>
	</td>
	</tr>

	
	<tr>
	
	<td colspan=2 align=center >
	<input type="submit" value=" Save Floor" />
	</td>
	</tr>
	
	</table>
	
	</form>
	
	
	
	</body>
	
	</html>