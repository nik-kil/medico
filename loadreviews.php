<?php

	include_once('db.php');
	
	$vid=$_REQUEST['vid'];
	
	$sql="select * from reviews where vendor_id=$vid";
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	if( !$row )
	{
	echo "<h2>No reviews to display</h2>";
	return;
	}
	
	$res=execute( $sql );
	
	
?> 	

	<div >
	
	<table class="table" >
	
	<?php
	while( $row=$res->fetch_object() )
	{
	?>
	
	<tr class="">
	<th>
	By:-  <?php echo $row->name ?><br/>
	<span class="primary"  style="color:purple;"><?php echo $row->review ?></span>
	</th>
	
	
	</tr>
	
	<?php 
	}
	?>
	
	</table>
	
	</div>
	
	<br/><br/>