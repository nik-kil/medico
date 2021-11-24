

	<html>
	
	<head>
	
		<script src="rules.js" >
		</script>
		
		
	</head>
	
	<body>
	
	<form name="f1" onsubmit="return chklength( f1 );" >
	
	<center>
	
	
	<input type="text" name="fname" placeholder="Enter name "  required=required onkeypress="return isAlpha();" maxlength=15  />
	
	<br/> <br/>
		
	<input type="text" name="mobno" placeholder="Enter mobile no"  required=required onkeypress="return isDigit();" maxlength=10 />
	
	
	<br/><br/>
	<input type="submit" value=" Ok " />
	
	</center>
	
	
	</form>
	
	
	</body>
	
	</html>