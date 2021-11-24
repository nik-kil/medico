
<?php

include_once('vendornavbar.php');
include_once('db.php');


if( isset($_REQUEST['submit'] ) )
{


				
				$caption=$_REQUEST['caption'];
							
				$imgname="newarrivals".$_FILES["imgname"]["name"];
									
				
				$sql="insert into newarrivals(caption,imgname,vendor_id) values( '$caption','$imgname',$vendor_id )";
				
				
				$res=execute($sql);
				
				$destination="img/".$imgname;
		move_uploaded_file($_FILES["imgname"]["tmp_name"],$destination);
		

				echo "<br/><br/><div class='bg-success'><center><h3><font color=purple> OK Saved</font></h3><br/><a href=? ><b>Return</b></a></center></div>";
				
				
				
						
				
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

<h1>Add New Arrivals Form</h1>

<form name="f1" action="?" method="post" enctype="multipart/form-data"   >

<table class="table table-striped" >

<tr>
<td>
<input type="text" name="caption" required=required placeholder="Enter caption" />
</td>
</tr>



<tr>
<td>
<input type="file" name="imgname" requird=requried />
</td>
</tr>



<tr>
<td>
<input type="submit" value=" Save  " class="btn btn-primary"  name="submit" />
</td>
</tr>
</table>


</form>
</div>

</body>

</html>