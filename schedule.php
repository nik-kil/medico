
	<?php
	
		include_once('navbar.php');
		
		include_once('db.php');
		
		$repid=$_REQUEST['id'];
		$vendorid=$_REQUEST['vendor'];
		
		
		if( isset( $_REQUEST['submit'] ) )
		{
		
							$sdate=$_REQUEST['sdate'];
							$stime=$_REQUEST['stime'];
							
							$message="i will pick the order on $sdate,at $stime";
							
							$sql="insert into replies(repid,mobno,message,sender,vendorid) values($repid,'$mobno','$message','$name','$vendorid')";
		
							$res=execute( $sql );
		
							echo "<div class='container bg-info'><center><br/><a href='myorders.php' class='btn btn-primary'>Return</a></center></div>";
							
							$sql="update prescriptions set status='scheduled' where id=$repid";
							$res=execute( $sql );
		
							
							return;
							
		}
		
		
		
	?>
	
	
	<div class="bg-info" >
	
	<form name="f1" action="?" method="post" >
	
		<input type="hidden" name="id" value=<?php echo $repid ?> />
		<input type="hidden" name="vendor" value=<?php echo $vendorid ?> />
		
		<table class='table table-condensed'>
		
		<tr>
		<td>
		<input type="date" name="sdate" required=required />
		</td>
		</tr>
		
		
		<tr>
		<td>
		<input type="time" name="stime" required=required />
		</td>
		</tr>
		
		<tr>
		<td>
		<input type="submit"  name="submit" value=" Schedule" class="btn btn-danger" />
		</td>
		</tr>
		
		</table>
		
	
	</form>
	
	
	</div>
	