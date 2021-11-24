
	<?php
	
		include_once('navbar.php');
		
		include_once('db.php');
		$floor=urldecode($_REQUEST['floor'] );
		
		$sql="select * from floors where floor='$floor' ";
		
		//echo $sql;
		
		$res=execute( $sql );
		
	?>
	
	
	<div class="" >
	<div class="container" >
	<div class="row">
	
	<div class="table-responsive table-bordered" >
	<table class="table table-condensed" ><caption class="text-danger"><h2><?php echo $floor ?> Info</h2></caption>
	
	
	<tr class="danger" >
	<th>Sino</th><th>Floor</th><th>Info</th>
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
	
	
	
	
	</tr>
	
	
	<?php
	}
	?>
	</table>
	</div>
	</div>
	</div>
	</div>