
	<html>
	
	<head>
	<link rel="stylesheet" href="style.css" />
	
	<script src="rules.js">
	</script>
	
	
	</head>
		
	<body>
	
	<form name="f1" action="displaytable.php" >
	
	<table align=center >
	<tr>
	<td>Enter  a number</td>
	<td>
	<input type="text" name="t1" placeholder="Ex: 5"  required=required onkeypress="return isDigit();"  maxlength=2 />
	</td>
	
	<td>
	<input type="submit" value=" Display Table " />
	</td>
	</tr>
	
	</table>
	
	
	</form>
	
	</body>
	
	</html>