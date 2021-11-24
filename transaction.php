<?php

	include_once('navbar.php');
	
	include_once('db.php');
	
	$vid=$_REQUEST['vid'];
	
	//echo $vid;
	
	$sql="select * from items where vid=$vid";
	
	$res=execute( $sql );
	
?>

	<div class="container"  >
	
	<?php
	while( $row=$res->fetch_object() )
	{
	
	?>
	<div class="container-fluid" style="border:2px solid gray; margin-bottom:10px; padding-bottom:10px; width:300px; margin-left:10px;">
	<img src="items/<?php echo $row->item_image ?>" class="img img-responsive" width="300px" height="300px"  />
	
	<b>Item name : </b><?php echo $row->item_name ?>
	<br/>
	<b>Item cost : </b><?php echo $row->cost ?>
	
	<br/><br/>
	
	<a href="addtocart.php?itemid=<?php echo $row->slno ?>&vid=<?php echo $row->vid ?>&cost=<?php echo $row->cost ?>"  class="btn btn-primary" >Add to cart</a>
	</div>
	<br/>
	
	
	<?php
	}
	?>
	
	
	</div>
