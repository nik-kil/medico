
	<?php
	
		include_once('adminnavbar.php');
		
		include_once('db.php');
		
		$sql="select p.id,name,p.mobno,filename,cdate,ctime,status  from prescriptions p,signup s where p.mobno=s.mobno order by p.id desc";
		$res=execute( $sql );
		
	?>
	
	
	<div class="bg-success" >
	<div class="container" >
	<div class="row">
	
	<div class="table-responsive" >
	<table class="table" >
	
	
	<tr>
	<th>Mobno</th><th>Prescription</th><th>Date</th><th>Time</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
	</tr>
	
	<?php
	
	while( $row=$res->fetch_object() )
	{
	?>
	<tr>
	<td>
	<?php echo $row->mobno ?>
	<br/>
	<b><?php echo $row->name ?></b>
	
	</td>
	
	
	
	<td>
	
	<img src="img/<?php echo $row->filename ?>"  class="img img-responsive"  style="width:300px; height:300px;" />
		
	</td>
	
	
	<td>
	<?php echo $row->cdate ?>
	</td>
	
	
	<td>
	<?php echo $row->ctime ?>
	</td>
	
	<td>
	<?php echo $row->status ?>
	</td>

	<!--
	<td>
	<a href="message.php?status=av&id=<?php echo $row->id ?>&mobno=<?php echo $row->mobno ?>" class="btn btn-sm btn-primary">Available</a>
	</td>
	
	<td>
	<a href="message.php?status=nav&id=<?php echo $row->id ?>&mobno=<?php echo $row->mobno ?>" class="btn btn-sm btn-danger">Not Available</a>
	</td>
	

	<td>
	<a href="message.php?status=cust&id=<?php echo $row->id ?>" class="btn btn-sm btn-success">Message</a>
	</td>
	-->
	</tr>
	
	
	<?php
	}
	?>
	</table>
	</div>
	</div>
	</div>
	</div>