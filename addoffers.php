
<?php

include_once('vendornavbar.php');
include_once('db.php');


if( isset($_REQUEST['submit'] ) )
{


				
				$caption=$_REQUEST['caption'];
				$det=$_REQUEST['det'];
				
				$imgname=$_FILES["imgname"]["name"];
									
				
				$sql="insert into offers(caption,det,vendor_id,imgname) values( '$caption','$det',$vendor_id,'$imgname' )";
				
				
				$res=execute($sql);
				
				$destination="img/".$imgname;
		move_uploaded_file($_FILES["imgname"]["tmp_name"],$destination);
		

				echo "<br/><br/><center><h3><font color=purple> OK Saved</font></h3><br/><a href=? ><b>Return</b></a></center>";
				
				
				
						
				
				exit();

}
else
{

	
}

?>

<style>
input,select{

width:250px;
height:40px;
}
</style>
<body>

<div class="container text-danger bg-info" >

<h1>Add Offers Form</h1>

<form name="f1" action="?" method="post" enctype="multipart/form-data"   >

<table class="table table-striped" >

<tr>
<td>
<input type="text" name="caption" required=required placeholder="Enter caption" />
</td>
</tr>


<tr>
<td>
<textarea name="det" required=required  placeholder="Details " ></textarea>
</td>
</tr>


<tr>
<td>
<input type="file" name="imgname" requird=requried />
</td>
</tr>



<tr>
<td>
<input type="submit" value=" Save offer " class="btn btn-primary"  name="submit" />
</td>
</tr>
</table>


</form>
</div>

</body>

</html>