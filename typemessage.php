<?php

	include_once('vendornavbar.php');
	
?>

<script>

$(document).ready( function(){


	$(".f1").submit( function(){
	
	
	$.get(
				"sendnotifications.php",
				{message:$(".msg").val()},
				
				function( data )
				{
				
					//alert(data);
					$(".container").html("<center><h1>Message Sent</h1></center>");
				}
				
	
			);
	
	return false;
	});
	
	
	
});

</script>


<div class="container text-danger bg-info" style="padding:10px;" >


<h2>Send Notifications Form</h2>

<form name="f1" class="f1" action="#osendnotifications.php" >


<textarea name="message" placeholder="Type your message here.." required=required  class="msg"  ></textarea>

<br/><br/>

<input type="submit" value=" Send Message "  class="btn btn-primary btn-lg" />

</form>


</div>