<?php

	include_once('navbar.php');
	include_once('db.php');
	
	if( isset($_REQUEST['submit'] ) )
	{
	
		
		
		
		
		
		$logo=$_FILES["logo"]["name"];
		
		$sql="insert into prescriptions(mobno,filename,cdate,status,ctime) values('$mobno','$logo',curdate(),'processing',curtime())";
	
		
		$destination="img/".$logo;
		move_uploaded_file($_FILES["logo"]["tmp_name"],$destination);
		
	
		$res=execute( $sql );
		
		echo "<div class='text-danger'><center><h1>Successfully uploaded the prescription</h1><br/><br/><a href=?>Return</a></center></div>";
		
		
		exit(0);
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
<div class="container"  style="background-color:#c9ced1;width:500px;">


<form name="f1" action="?" method="post" enctype="multipart/form-data">

<table class="table" >





<tr>

<td>Choose file</td>

<td>

<input type="file" name="logo" required=required placeholder="Ex:- Logo "  value="Prescription" />

</td>
</tr>




<tr>
<td colspan="2" align=center >
<input type="submit"  name="submit" value="Upload" class="btn btn-danger" />
</td>
</tr>

</table>
</form>

</div>