<?php

	include_once('navbar.php');
	
	$vid=$_REQUEST['vid'];
	$itemid=$_REQUEST['itemid'];
	
	$cost=$_REQUEST['cost'];
	
	//echo $mobno;
	
	if( !isset($mobno) )
	{
		echo "<center><h2>You must <a href=login.php>Login</a> to continue..</center>";
		exit(0);
	}


?>


	<script >
	
	$(document).ready( function(){
	
		$(".f1").submit( function(){
		
		
			if( parseInt( $(".qty").val() ) < 0 )
			{
				$(".msg").html("<br/><b>Invalid quantity</b><br/>");
				exit(0);
			
			}
			
			$.get(
			
						"saveorder.php",
						{vid:$(".hvid").val(),itemid:$(".hitemid").val(),qty:$(".qty").val(),cost:$(".hcost").val()},
						function( data )
						{
							
							$(".msg").html("<br/><b>Item added to cart</b><br/>");
							
							$("#cart").html("( "+data+" ) ");
						}
			
					);
					
					
					return false;
		});
		
	});
	</script>
	
<body>

	<div class="container bg-info" style="padding:10px;" >
	
	<h2>Select Quantity Form </h2>
	<form name="f1" class="f1"  action="#" >
	<input type="hidden" class="hvid" name="hvid" value=<?php echo $vid ?> />
	<input type="hidden" class="hitemid" name="hitemid" value=<?php echo $itemid ?> />
	
	<input type="hidden" class="hcost" name="hcost" value=<?php echo $cost ?> />
	
	<input type="number" name="qty" class="qty" required=required />
	<br/><br/>
	<input type="submit" value=" Add "  class="btn btn-primary" />
	
	<span class="msg"></span>
	</form>
	
	
	</div>


</body>