<?php

	include_once('adminnavbar.php');
	include_once('db.php');
	
	if( isset($_REQUEST['submit'] ) )
	{
			
		
		$logo=$_FILES["logo"]["name"];
		$vendor_id=$_REQUEST['vendor_id'];
		
		$sql="update vendors set logo='$logo' where vendor_id=$vendor_id";
	
		
		$destination="img/".$logo;
		move_uploaded_file($_FILES["logo"]["tmp_name"],$destination);
		
	
		$res=execute( $sql );
		
		echo "<div class='bginfo text-danger'><center><h1>Vendor saved</h1><br/><br/><a href=viewvendors.php>Return</a></center></div>";
		exit(0);
	}
	else
	{
		$vendor_id=$_REQUEST['vendor_id'];
	}
	
?>


<style>

input,select{

	border:1px solid black;
	font-weight:bold;
	width:260px;
	height:33px;
	padding-left:10px;
	
}

</style>
<div class="container bg-success"  style="opacity:0.9;">


<form name="f1" action="?" method="post" enctype="multipart/form-data">


<input type="hidden" name="vendor_id" value=<?php echo $vendor_id ?> />
<table class="table" >




<tr>

<td>Business Logo</td>

<td>

<input type="file" name="logo" required=required placeholder="Ex:- Logo "  value="Logo" />

</td>
</tr>


<tr>
<td colspan="2" align=center >
<input type="submit"  name="submit" value="Save Vendor" class="btn btn-danger" />
</td>
</tr>

</table>
</form>

</div>