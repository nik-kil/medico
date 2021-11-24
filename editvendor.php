<?php

	include_once('adminnavbar.php');
	include_once('db.php');
	
	$vendor_id=$_REQUEST['vendor_id'];
	
	
	
	if( isset($_REQUEST['submit'] ) )
	{
	
		
		
		
		$vendor_name=$_REQUEST['vendor_name'];
		
		$business_name=$_REQUEST['business_name'];
		$contno=$_REQUEST['contno'];
		$floor=$_REQUEST['addr'];
		
		//$user_name=$_REQUEST['user_name'];
		//$pwd=$_REQUEST['pwd'];
		
		
		//$logo=$_FILES["logo"]["name"];
		
		$sql="update vendors set vendor_name='$vendor_name',floor='$floor',bunsiness_name='$business_name',contno='$contno' where vendor_id='$vendor_id' ";
	
		
		//$destination="img/".$logo;
		//move_uploaded_file($_FILES["logo"]["tmp_name"],$destination);
		
	
		$res=execute( $sql );
		
		echo "<div class='bginfo text-danger'><center><h1>Logo got Updated</h1><br/><br/><a href=viewvendors.php>Return</a></center></div>";
		exit(0);
	}
	else
	{
	
		$sql="select * from vendors where vendor_id=$vendor_id";
		$res=execute( $sql );
		$row=$res->fetch_object();
		
		$sfloor=$row->floor;
		
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

<h1>Edit Vendor Form</h1>
<form name="f1" action="?" method="post" enctype="multipart/form-data">


<input type="hidden" name="vendor_id" value=<?php echo $vendor_id ?> />

<table class="table" >

<tr>

<td>Business Name</td>

<td>
<input type="text" name="business_name" required=required placeholder="Ex:- Panthloon "  style="opacity:1.0" value=<?php echo $row->bunsiness_name ?> />

</td>
</tr>

<!--
<tr>

<td>Business Logo</td>

<td>

<input type="file" name="logo" required=required placeholder="Ex:- Logo "  value="Logo" />

</td>
</tr>

-->


<tr>


<td>Floor</td>

<td>
<textarea name="addr"><?php echo $sfloor ?></textarea>
</td>
</tr>



<tr>

<td>Vendor Name</td>

<td>

<input type="text" name="vendor_name" required=required placeholder="Ex:- Ramesh " value=<?php echo $row->vendor_name ?> />

</td>
</tr>



<tr>

<td>Mobile no</td>

<td>

<input type="text" name="contno" required=required placeholder="Ex:- 9844557896 " value=<?php echo $row->contno ?> />

</td>
</tr>


<tr>
<td colspan="2" align=center >
<input type="submit"  name="submit" value=" Edit Vendor" class="btn btn-danger" />
</td>
</tr>

</table>
</form>

</div>