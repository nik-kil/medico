
	<?php
	
		include_once('adminnavbar.php');
		
		include_once('db.php');
		
		
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
	
	<div class="bg-info" >
	<div class="container bg-success" >
	<div class="row">
	
	<div class="table-responsive table-bordered" >
	
	<form name="f1" action="viewfloorinfo.php" >
	
	<h2>Select Floor</h2>
	
	<table class="table table-condensed" >
	
	<tr>
	<td>
	
	<select name="floor">

<option value="Ground-Floor">Ground-Floor</option>
<option value="1-Floor">1-Floor</option>
<option value="2-Floor">2-Floor</option>
<option value="3-Floor">3-Floor</option>
<option value="4-Floor">4-Floor</option>


</select>

<input type="submit" value=" OK " class="btn btn-primary" />
	</td>
	
	
	
	</tr>
	
	
	</table>
	
	</form>
	
	</div>
	</div>
	</div>
	</div>