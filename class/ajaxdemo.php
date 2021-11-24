	<html>
	
		<head>
		
		<script src="jquery-3.3.1.js">
		</script>
		
		<script>
		
			$(document).ready( function(){
			
				$(".f1").submit( function(){
				
					
					$.get(
							
								"getinfo.php",
								{floor_id: $(".t1").val()},
								
								function( data )
								{
								
									$(".result").html(data);
								}
					
						);
					
					return false;
				});
			});
		
		</script>
		
		
		</head>
		
		
		<body>
		
			<form name=f1 class="f1" action="getinfo.php" >
			
			<center>
			
			<input type="text" name="floor_id" class="t1" placeholder="Enter Floor ID" required=required />
			
			<input type="submit" value=" OK " />
			
			</center>
			
			</form>
		
		
			<div class="result">
			</div>
		</body>
		
	
	</html>