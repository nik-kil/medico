<?php

	include_once('vendornavbar.php');
	
	
?>



<script>

$(document).ready( function(){


	$(".container").load("loadreviews.php",{vid:<?php echo $vendor_id; ?>},function( data ){  });
});
</script>



<div class="container bg-success" >


</div>