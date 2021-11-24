
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Login Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
  
	<script src="jquery-3.3.1.js" >
	</script>
	
	
	<script src="js/bootstrap.min.js" >
	</script>
	
	
	<script>
	
	$(document).ready( function(){
	
		$(".f1").submit( function(){
		
			if( $(".logintype").val()=="admin" )
			{
			
				if( $(".uname").val()=="admin" && $(".pwd").val()=="admin" )
				{
					$.get(  
									"createadminsession.php",
									function( data )
									{
												location.href="adminhomepage.php";
									}
					
							);
					
				}
				else
				{
					$(".msg").html("<b>Login Failed</b>");
				}
			}
			else     // vendor
			{
				
					$.get(
								"chkvendorlogin.php",
								{uname:$(".uname").val(),pwd:$(".pwd").val()},
								function( data )
								{
									//alert(data);
									
									if( data==1 )
									{
									
										location.href="vendorhomepage.php";
									}
									else if(data==0 )
									{
									
									$(".msg").html("<b>Either User Name/ Password is Wrong</b>");
									}
									else if( data==2)
									{
									$(".msg").html("<b>Account is not approved,contact admin</b>");
									}
								
								}
					
					       );
			
			}
			
			
			return false;
		});
	});
	</script>
	
	<style>
	
	.msg{
		color:red;
	}
	
	body{
	
		background-image:url(img/login.png);
		background-repeat:no-repeat;
		//background-size:cover;
		
		//background:-webkit-linear-gradient(top,maroon,peru);
		
		background-color:lightblue;
	}
	</style>
	
    </head>
	
	<body>
	
	<div class="container" >
	
	<div class="col-md-8">
	&nbsp;
	</div>
	
	<div class="col-md-4" style="margin-top:200px;" >
	
	<form name="f1" class="f1" >
	
	<table class="table">
	
	
	<tr>
	<td>
	
	<select class="logintype" name="logintype" style="width:172px; height:30px;" >
	
	<option value="admin">Admin</option>
	
	</select>
	
	</td>
	</tr>
	
	<tr>
	<td>
	<input type="text" name="uname" class="uname" placeholder="User Name" required=required /> 
	</td>
	</tr>
	
	<tr>
	<td>
	<input type="password" name="pwd" class="pwd" placeholder="Password"  required=required /> 
	</td>
	</tr>
	
	
	<tr>
	<td>
	<input type="submit"  class="btn btn-danger btn-lg" value="Login" /> 
	</td>
	</tr>
	
	</table>
	
	<span class="msg"></span>
	</form>
	</div>
	
	</div>
	
	
	
	</body>
	
	</html>