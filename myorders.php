
	<?php
	
		include_once('navbar.php');
		
		include_once('db.php');
		
		$sql="select name,p.id,p.mobno,filename,cdate,ctime,status,p.vendor  from prescriptions p,signup s where ( p.mobno=s.mobno and s.mobno='$mobno' ) order by p.id desc";
		$res=execute( $sql );
		
	?>
	
	
	<div class="bg-info" style="background-color:#c9ced1">
	<div class="container" >
	<div class="row">
	
	<div class="table-responsive" >
	<table class="table" >
	
	
	<tr>
	<th>Mobno</th><th>Prescription</th><th>Date</th><th>Time</th><th>Status</th>
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
	
	<?php
	
	$status=$row->status;
				
				/*
				if( $row->status=="avilable" )
				{
						echo "<br/><a href='schedule.php?id=$row->id&vendor=$row->vendor' class='btn btn-primary'>Schedule My order</a>";
				}
				
				*/
	?>
	</td>
		
	</tr>
	
	<tr>
	<td colspan="4" >
	
	<div class="bg-danger" style="background-color:#c9ced1" >
			<center><h3 style="color:#368B85; "><strong>Messages</strong></h3></center>
		<?php
						
						$id=$row->id;
						
						$sql="select * from replies where repid=$id order by id";
						$res1=execute( $sql );
						
						while( $row1=$res1->fetch_object() )
						{
						
								$sql="select floor from vendors where user_name='$row1->vendorid'";
								
								$res2=execute($sql);
								$row2=$res2->fetch_object();
								
								$floor=$row2->floor;
								
								echo "<div class='' style='background-color:white;'>";
								
								if( $name !=$row1->sender )
								echo "<i class='text-danger text-big'><b><a href='$floor'>$row1->sender</a> : </b></i><br/>$row1->ctime";
								else
								echo "<i class='text-danger text-big'><b>$row1->sender</b></i><br/>$row1->ctime";
								
								
								echo "&nbsp; &nbsp; <b>$row1->message</b>";
								//echo "name = $name";
								if( $row1->status=="avilable" and  $name !=$row1->sender)
								{
									//echo "status = $status and $row1->sender";
									echo "&nbsp;&nbsp;<a href='schedule.php?id=$row->id&vendor=$row->vendor' class='btn btn-primary'>Schedule My order</a>";
								}
								
								
								
								echo "</div></br>";
						
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