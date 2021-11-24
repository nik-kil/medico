<?php
	
	include_once('navbar.php');

	include_once('db.php');
	$id=$_REQUEST['id'];
	
	$sql="select * from vendors where vendor_id=$id";
	$res=execute( $sql );
	
?>




<div class="container" id="venddet" >

	<?php
	while( $row=$res->fetch_object() )
	{
	
	
		$sql="select count(*) as nor from reviews where vendor_id=$row->vendor_id";
		$res1=execute( $sql );
		$row1=$res1->fetch_object();
		$count=$row1->nor;
	?>
	
	<div class="col-sm-12"  style="border:1px solid black; margin-bottom:5px;padding:10px;" >
	<center>
	
	<h3><?php echo $row->bunsiness_name ?> </h3>
	<a href="displayinfo.php?vid=<?php echo $row->vendor_id ?>" >
	<img src="img/<?php echo $row->logo ?>"  class="img img-responsive" />
	</a>
	
	<br/><br/>
	<a href="transaction.php?vid=<?php echo $row->vendor_id ?>" class="btn btn-success" >
	Start Transaction
	</a>
	
	
	<a href="displayinfo.php?vid=<?php echo $row->vendor_id ?>" class="btn btn-info" >
	offers and reviews &nbsp;<span class="badge"><?php echo $count ?></span>
	</a>
	
	</center>
	</div>
	
	<?php
	}
	?>
</div>