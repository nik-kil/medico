<?php

	include_once('navbar.php');
	include_once('db.php');
	
	if( isset($_REQUEST['submit'] ) )
	{
	
		
		
		
		$vendor_name=$_REQUEST['vendor_name'];
		//$catg=$_REQUEST['catg'];
		
		$business_name=$_REQUEST['business_name'];
		$contno=$_REQUEST['contno'];
		$floor=$_REQUEST['floor'];
		$user_name=$_REQUEST['user_name'];
		$pwd=$_REQUEST['pwd'];
		
		
		$logo=$_FILES["logo"]["name"];
		
		$lic=$_FILES["lic"]["name"];
		
		$sql="insert into vendors(logo,vendor_name,bunsiness_name,contno,floor,user_name,pwd,about,approved,lic) values('$logo','$vendor_name','$business_name','$contno','$floor','$user_name','$pwd','NIL',0,'$lic')";
	
		
		$destination="img/".$logo;
		move_uploaded_file($_FILES["logo"]["tmp_name"],$destination);
		
		$destination="img/".$lic;
		move_uploaded_file($_FILES["lic"]["tmp_name"],$destination);
		
	
		$res=execute( $sql );
		
		echo "<div class='bginfo text-danger'><center><h1>Your request has been accepted,after account has been approved,you can start your business online</h1><br/><br/><a href=? class='btn btn-lg btn-primary'>Return</a></center></div>";
			
					
			
			
		
		exit(0);
	}
	
?>

<script>

function myFunction() {
  var x = document.getElementById("myInput");
  //alert('hi');
  
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

</script>


<style>

input[type='text'],input[type='password'],textarea,input[type='file'],select{

	border:1px solid black;
	font-weight:bold;
	width:260px;
	height:33px;
	padding-left:10px;
	
}

</style>
<div class="container bg-success"  style="opacity:0.9;">


<form name="f1" action="?" method="post" enctype="multipart/form-data">

<table class="table" >


<tr>

<td>Business Name</td>

<td>
<input type="text" name="business_name" required=required placeholder="Ex:- Medicare "  maxlength=10 style="opacity:1.0" />

</td>
</tr>


<tr>

<td>Business Logo</td>

<td>

<input type="file" name="logo" required=required placeholder="Ex:- Logo "  value="Logo" />

</td>
</tr>


<tr>

<td>Licence document</td>

<td>

<input type="file" name="lic" required=required placeholder="Licence"  value="Document" />

</td>
</tr>



<tr>

<td>Address</td>

<td>

<textarea name="floor" placeholder="paste URL of you're retail store location from the google maps" required=required ></textarea>

</td>
</tr>


<tr>

<td>Vendor Name</td>

<td>

<input type="text" name="vendor_name" required=required placeholder="Ex:- Ramesh " />

</td>
</tr>



<tr>

<td>Mobile no</td>

<td>

<input type="text" name="contno" required=required placeholder="Ex:- 9844557896 " />

</td>
</tr>



<tr>

<td>User Name</td>

<td>

<input type="text" name="user_name" required=required placeholder="Ex:- Ramesh123 " />

</td>
</tr>



<tr>

<td>Password</td>


<td>

<input type="password" name="pwd" class="pwd" id="myInput" required=required placeholder="Ex:- 123456 " />
<input type="checkbox" onclick="myFunction()"   />Show Password


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


<div class="container">
<h2>Instructions</h2>

<p>


1. Registration is the first step to connect with this platform, account needs to be approved by the admin.
<br/>
2. Vendors must upload valid pharmacy document( Licence ) to get approved.

<br/>
3. Registering vendor must add the <strong>URL of their retail store location from the google maps </strong>.
<br/>


4. Contact support at <strong>contactmedico@gmail.com .</strong> 


</p>



</div>