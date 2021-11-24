
	<?php
	
		include_once('adminnavbar.php');
		
		include_once('db.php');
		
		$sql="select * from vendors";
		$res=execute( $sql );
		
	?>
	
	
	<div class="bg-success" >
	<div class="container" >
	<div class="row">
	
	<div class="table-responsive" >
	<table class="table" >
	
	
	<tr>
	<th>Vendor Name</th><th>Business Name</th><th>Address</th><th>Logo</th><th>License</th>Contact No</th><th>User name</th><th>Modify</th><th>Status</th>
	</tr>
	
	<?php
	
	while( $row=$res->fetch_object() )
	{
	?>
	<tr>
	<td>
	<?php echo $row->vendor_name ?>
	</td>
	
	
	
	<td>
	<?php echo $row->bunsiness_name ?>
	</td>
	
	
	<td>
	<a href="<?php echo $row->floor ?>"><?php echo $row->floor ?></a>
	</td>
	
	<td>
	<img src="img/<?php echo $row->logo ?>"  class="img img-responsive"  style="width:100px; height:100px;" />
	<br/>
	
	<a href="editlogo.php?vendor_id=<?php echo $row->vendor_id ?>"  class="btn btn-danger" >Edit Logo</a>

	</td>
	
	<td>
	<img src="img/<?php echo $row->lic ?>"  class="img img-responsive"  style="width:150px; height:150px;" />

	
	</td>
	<td>
	<?php echo $row->contno ?>
	</td>
	
	
	<td>
	<?php echo $row->user_name ?>
	</td>
	
	<td>
	<a href="editvendor.php?vendor_id=<?php echo $row->vendor_id ?>" class="btn btn-success" >Edit Info</a>
	<br/><br/>
	<a href="deletevendor.php?vendor_id=<?php echo $row->vendor_id ?>"  class="btn btn-danger" onclick="return confirm('Are you sure ???');">Delete</a>
	
	</td>
	
	<td>
	<?php
		echo $row->approved;
	?>
	</td>
	
	<td>
	
	<?php
	
		if( $row->approved==0 )
		{
			echo "<a href='approve.php?id=$row->vendor_id&flag=$row->approved' class='btn btn-info'>Approve </a>";
		}
		else
		{
			 echo "<a href='approve.php?id=$row->vendor_id&flag=$row->approved' class='btn btn-danger'>Decline</a>";
		}
	
	?>
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