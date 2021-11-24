<?php

	include_once('vendornavbar.php');
	
	include_once('db.php');
	
	
	if( isset($_REQUEST['submit'] ) )
	{
		
		$about=$_REQUEST['about'];
		
		
		$sql="update vendors set about='$about' where vendor_id=$vendor_id";
		$res=execute($sql);
		
		echo "<div class='bg-info'><h1>Modified</h1></div>";
	
	}
	else
	{
	$sql="select * from vendors where vendor_id=$vendor_id";
	$res=execute( $sql );
	$row=$res->fetch_object();
	$about=$row->about;
	
	
	}
	
?>

<div class="container bg-success text-danger" style="padding:20px;" >
<h1>Update About Form</h1>

<form name="f1" action="?"  method=post >

<textarea name="about"><?php echo $about ?></textarea>
<br/><br/>

<input type="submit" name="submit" value="Update" class="btn btn-danger"  />
</form>
</div>