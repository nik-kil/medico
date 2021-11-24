
<?php

include_once('vendornavbar.php');
include_once('db.php');


if( isset($_REQUEST['submit'] ) )
{


				
				$item_name=$_REQUEST['item_name'];
				
				$cost=$_REQUEST['cost'];
							
				$imgname=$_FILES["imgname"]["name"];
									
				
				$sql="insert into items(vid,vendor_uname,item_name,item_image,cost) values( $vendor_id,'$user_name','$item_name','$imgname',$cost )";
				
				
				$res=execute($sql);
				
				$destination="items/".$imgname;
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

<h1>Add New item Form</h1>

<form name="f1" action="?" method="post" enctype="multipart/form-data"   >

<table class="table table-striped" >

<tr>
<td>
<input type="text" name="item_name" required=required placeholder="Enter item name" />
</td>
</tr>

<tr>
<td>
<input type="file" name="imgname" requird=requried />
</td>
</tr>


<tr>
<td>
<b>Enter Cost</b><br/>
<input type="number" name="cost" requird=requried placeholde="Cost"  />
</td>
</tr>


<tr>
<td>
<input type="submit" value=" Save Item  " class="btn btn-primary"  name="submit" />
</td>
</tr>
</table>


</form>
</div>

</body>

</html>