
	<?php
	
		include_once('adminnavbar.php');
		
		include_once('db.php');
		$floor=$_REQUEST['floor'];
		
		$sql="select * from floors where floor='$floor' ";
		$res=execute( $sql );
		
	?>
	
	
	<div class="bg-info" >
	<div class="container" >
	<div class="row">
	
	<div class="table-responsive table-bordered" >
	<table class="table table-condensed" >
	
	
	<tr class="danger" >
	<th>Sino</th><th>Floor</th><th>Info</th><th>Remove</th>
	</tr>
	
	<?php
	$sino=1;
	while( $row=$res->fetch_object() )
	{
	?>
	<tr>
	<td>
	<?php echo $sino ?>
	</td>
	
	<td>
	<?php echo $row->floor ?>
	</td>
	
	
	<td>
	<?php echo $row->info ?>
	</td>
	
	<td>
	
	<a href="removefloorinfo.php?sino=<?php echo $row->sino ?>"  class="btn btn-danger" >Remove</a>
	</td>
	
	
	
	
	</tr>
	
	
	<?php
	}
	?>
	</table>
	</div>
	</div>
	</div>
	</div>