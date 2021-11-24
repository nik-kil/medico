<?php

	
	$business=$_REQUEST['business'];
	
	include_once('db.php');
	
	$sql="select * from vendors where bunsiness_name like '%$business%'";
	
	$res=execute( $sql);
	
	//echo $sql;

?>


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
	
	<a href="displayinfo.php?vid=<?php echo $row->vendor_id ?>" >
	<img src="img/<?php echo $row->logo ?>"  class="img img-responsive" />
	</a>
	
	<br/><br/>
	
	<a href="displayinfo.php?vid=<?php echo $row->vendor_id ?>" class="btn btn-success" >
	<?php echo $row->bunsiness_name ?>
	</a>
	
	&nbsp;&nbsp;
	<a href="displayinfo.php?vid=<?php echo $row->vendor_id ?>" class="btn btn-info" >
	Review &nbsp;<span class="badge"><?php echo $count ?></span>
	</a>
	
	
	<br/><br/>
	
	
	</center>
	</div>
	
	<?php
	}
	?>