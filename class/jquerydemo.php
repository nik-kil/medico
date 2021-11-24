

	<html>
	
	<head>
	
		<script src="jquery-3.3.1.js">
		</script>
		
		
		<script>
		
		
		
		$( document ).ready( function(){
		
				
				$(".t1").keypress( function(){
				
						var k=event.keyCode;
						
						if( k>=97 && k<=122 )
						{}else
						{
						$(".t1").css("border","2px solid red");
						return false;
						}
				});
				
				
		});
		</script>
		
		
	</head>
	
	<body>
	
		<input type="text" name="t1" class="t1" placeholder="Enter name" />
	
	</body>
	
	</html>