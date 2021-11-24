<?php

	include_once('navbar.php');
	include_once('db.php');
		
?>

<style>

input,select,textarea{

	border:1px solid black;
	font-weight:bold;
	width:200px;
	height:33px;
	padding-left:10px;
	
}

textarea{

height:53px;
}

</style>


<script>

	$(document).ready( function(){
	
		$(".f1").submit( function(){
		
		
			if( $(".mobno").val().charAt(0) =='1' || $(".mobno").val().charAt(0) =='2'  || $(".mobno").val().charAt(0) =='3' )
			{
			
				$(".result").html("<center><h1 style='color:red;'>Invalid mobile no, it must begin with 9 </h1></center>");
				return false;
			}
		
			$.get(
			
						"savesignup.php",
						{name:$(".name").val(),mobno:$(".mobno").val(),pwd:$(".pwd").val(),addr:$(".addr").val(),sque:$(".sque").val(),ans:$(".ans").val()},
						
						function( data )
						{
						
							//alert(data);
							
							if( data==2 )
							{
							$(".result").html("<center><h1 style='color:blue;' >Congrats,Account Got Created</h1></center>");
							location.href="login.php";
							}
							else if( data==1 )
							{
							$(".result").html("<center><h1 style='color:red;'>Sorry,this mobile no already registred</h1></center>");
							}
							
						}
				   );
			
		
			return false;
		});
		
	});

</script>


<script src="rules.js">
</script>


<div class="container bg-success"  style="opacity:0.9;">
<h1>Users Registration Form</h1>

<form name="f1" action="?" method="post" enctype="multipart/form-data" class="f1" >

<table class="table" >

<tr>

<td>Name</td>

<td>
<input type="text" name="name"  class="name" required=required placeholder="Ex:- Rajesh "  style="opacity:1.0" onkeypress="return isAlpha();" />

</td>
</tr>



<tr>
<td>Mobile no</td>
<td>
<input type="text" name="mobno" class="mobno" required=required placeholder="Ex:- 9844551235 " maxlength=10 onkeypress="return isDigit();" />
</td>
</tr>


<tr>
<td>Address</td>
<td>
<textarea name="addr" class="addr" required=required placeholder="Ex:- #c/3,2nd maing,vidyangar,Hubballi " ></textarea>
</td>
</tr>






<tr>
<td>Password</td>
<td>
<input type="password" name="pwd" class="pwd"  required=required placeholder="Ex:- 123456 "  maxlength=10 />
</td>
</tr>



<tr>
<td>Choose security question</td>
<td>

<select name="sque" class="sque">
<option value="your nick name ?">your nick name ?</option>
<option value="your favt color ?">your favt color ?</option>
<option value="your fact dish">your fact dish</option>

</select>
</td>
</tr>



<tr>

<td>Your answer</td>
<td>
<input type="text" name="ans" class="ans" required=required />
</td>
</tr>
<tr>
<td colspan="2" align=center >
<input type="submit"  name="submit" value=" Create Account" class="btn btn-danger" />
</td>
</tr>

</table>
</form>

</div>

<div class="result">
</div>