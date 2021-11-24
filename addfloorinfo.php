<?php

	include_once('adminnavbar.php');
	include_once('db.php');
	
	if( isset($_REQUEST['submit'] ) )
	{
	
		
		
		
		
		
		
		$floor=$_REQUEST['floor'];
		$info=$_REQUEST['info'];
		
		
		$sql="insert into floors(floor,info) values('$floor','$info')";
	
		
		
		$res=execute( $sql );
		
		echo "<div class='bginfo text-danger'><center><h1>Floor Info Saved</h1><br/><br/><a href=?>Return</a></center></div>";
		exit(0);
	}
	
?>


<style>

input,select,textarea{

	border:1px solid black;
	font-weight:bold;
	width:260px;
	height:33px;
	padding-left:10px;
	
}

</style>
<div class="container bg-success"  style="opacity:0.9;">

<h1>Add floor info form</h1>

<form name="f1" action="?" method="post" enctype="multipart/form-data">

<table class="table" >







<tr>


<td>Floor</td>

<td>
<select name="floor">

<option value="Ground-Floor">Ground-Floor</option>
<option value="1-Floor">1-Floor</option>
<option value="2-Floor">2-Floor</option>
<option value="3-Floor">3-Floor</option>
<option value="4-Floor">4-Floor</option>


</select>
</td>
</tr>










<tr>

<td>Information</td>

<td>

<textarea name="info" required=required placeholder="Toys Section" ></textarea>

</td>
</tr>




</td>
</tr>

<tr>
<td colspan="2" align=center >
<input type="submit"  name="submit" value="Save Info" class="btn btn-danger" />
</td>
</tr>

</table>
</form>

</div>