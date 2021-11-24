
	<?php
	
		include_once('adminnavbar.php');
		
		include_once('db.php');
		
		$sql="select * from signup";
		$res=execute( $sql );
		
	?>
	
	
	<div class="bg-success" >
	<div class="container" >
	<div class="row">
	
	<div class="table-responsive" >
	
	<h2>Registred users</h2>
	<table class="table" >
	
	
	<tr>
	<th>Name</th><th>Mobileno</th><th>
	</tr>
	
	<?php
	
	while( $row=$res->fetch_object() )
	{
	?>
	<tr>
	<td>
	<?php echo $row->name ?>
	</td>
	
	<td>
	<?php echo $row->mobno ?>
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