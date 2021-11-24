<?php

include_once('vendornavbar.php');
include_once('db.php');

$sql="select * from newarrivals  where vendor_id=$vendor_id";
	
		
$res=execute( $sql );
	
	echo "<div class='container bg-success text-danger' >";
	echo "<table align=center class='table table-condensed table-bordered table-striped' >";
	echo "<tr><th>Sino</th><th>Image</th><th>Caption</th><th>&nbsp;</th></tr>";
	$sino=1;
	while( $row=$res->fetch_object() )
	{
	
	
	echo "<tr><td>$sino</td><td><img src='img/$row->imgname' width=100px height=100px /></td><td>$row->caption</td><td>";
	?>
	
	<a href="deletenewarrivals.php?sino=<?php echo $row->sino ?>" class="btn btn-danger" onclick="return confirm('Are you sure ??')" >Delete
	</a>
	
	</td></tr>
	
	<?php
	$sino=$sino+1;
	}
	echo "</table></div>";

    ?>