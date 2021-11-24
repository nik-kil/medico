
	<?php
	
		include_once('vendornavbar.php');
		
		include_once('db.php');
		
		$sql="select name,p.mobno,p.id,filename,cdate,ctime,status from prescriptions p,signup s where p.mobno=s.mobno order by p.id desc";
		$res=execute( $sql );
		
	?>
	
	
	<div class="bg-success" >
	<div class="container" >
	<div class="row">
	
	<div class="table-responsive" >
	<table class="table" >
	
	
	<tr>
	<th>Mobno</th><th>Prescription</th><th>Date</th><th>Time</th><th>Status</th><th>&nbsp;</th><th>&nbsp;</th><th>&nbsp;</th>
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
	
	
	
	<td>
	<a href="message.php?status=av&id=<?php echo $row->id ?>&mobno=<?php echo $row->mobno ?>" class="btn btn-sm btn-primary">Available</a>
	</td>
	
	<td>
	<a href="message.php?status=nav&id=<?php echo $row->id ?>&mobno=<?php echo $row->mobno ?>" class="btn btn-sm btn-danger">Not Available</a>
	</td>
	

	
	</tr>
	
	<tr>
	<td colspan="4" >
	
	<div class="bg-dark" >
			<center><h4>Messages</h4></center>
		<?php
						
						$id=$row->id;
						
						$sql="select * from replies where repid=$id and vendorid='$user_name' order by id";
						$res1=execute( $sql );
						
						while( $row1=$res1->fetch_object() )
						{
								
								echo "<div class='' style='background-color:white;'>";
								echo "<i class='text-primary text-big'><b>$row1->sender : </b></i>";
								echo "$row1->message</div></br>";
						
						}
						
			
		?>
	
	</div>
	
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