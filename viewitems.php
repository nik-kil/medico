<?php

include_once('vendornavbar.php');
include_once('db.php');

$sql="select * from items  where vid=$vendor_id";
	
		
$res=execute( $sql );
	
	echo "<div class='bg-success text-danger' >";
	echo "<table align=center class='table  table-striped' >";
	echo "<tr><th>Sino</th><th>Image</th><th>Item name</th><th>Cost</th><th>&nbsp;</th></tr>";
	$sino=1;
	while( $row=$res->fetch_object() )
	{
	
	
	echo "<tr><td>$sino</td><td><img src='items/$row->item_image' width=100px height=100px /></td><td>$row->item_name</td><td>$row->cost </td><td>";
	?>
	
	<a href="deleteitem.php?slno=<?php echo $row->slno ?>" class="btn btn-primary" onclick="return confirm('Are you sure ??')" >Delete
	</a>
	
	</td></tr>
	
	<?php
	$sino=$sino+1;
	}
	echo "</table></div>";

    ?>