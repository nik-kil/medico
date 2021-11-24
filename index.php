<?php
	
	include_once('navbar.php');
	include_once('db.php');
	
	$sql="select * from vendors";
	$res=execute( $sql );
	
?>

<script>
	
	$(document).ready( function(){
	
		//alert('hi');
		$(".form-control").keyup( function(){
		
				
			$(".container").load("searchinfo.php",{business:$( this ).val()});
		
		});
	});
	
</script>


<div class="container"  style="margin-top:100px;" >
<h5> <strong style="color:#7F7C82">   List of Pharmacies around you </strong></h5>
<br/>

	<?php
	
		while($row=$res->fetch_object() )
		{
	
		echo "<a href='index1.php?id=$row->vendor_id' class='btn btn-lg btn-primary'   style='width:200px;' >$row->bunsiness_name</a><br/><br/>";
		
	
		
		}
	
	?>



</div>


