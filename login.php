<?php

	include_once('navbar.php');
	include_once('db.php');
	
		
?>


<style>

input[type='text'],input[type='password'],input[type='submit'],select{

	border:1px solid black;
	font-weight:bold;
	width:200px;
	height:33px;
	padding-left:10px;
	
}

</style>


<script>



	$(document).ready( function(){
	
		$(".f1").submit( function(){
		
		
			$.get(
			
						"chklogin.php",
						{mobno:$(".mobno").val(),pwd:$(".pwd").val()},
						
						function( data )
						{
						
							//alert(data);
							
							if( data==2 )
							{
							$(".result").html("<center><h1 style='color:blue;' >Login successful</h1></center>");
							location.href="index.php";
							}
							else if( data==1 )
							{
							$(".result").html("<center><h1 style='color:red;'>Sorry,Login Failed</h1><a href='forgotpwd.php' class='btn btn-danger btn-lg'>Forogot password ?</a></center>");
							}
							
						}
				   );
			
		
			return false;
		});
		
	});
	
	
	
	
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


<div class="container bg-success"  style="opacity:0.9;">
<h1>Login Form</h1>

<form name="f1" action="?" method="post" enctype="multipart/form-data" class="f1" >

<table class="table" >





<tr>

<td>Mobile no</td>

<td>

<input type="text" name="mobno" class="mobno" required=required placeholder="Ex:- 9844551235 " />

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
<input type="submit"  name="submit" value=" Login " class="btn btn-danger" />
</td>
</tr>

</table>
</form>

</div>

<div class="result">
</div>