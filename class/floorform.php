
	<html>
	<head>
	<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
	
	<form name="f1" action="savefloors.php" >
	
	<table align="center" >

	<tr>
	<td>Enter Floor ID</td>
	<td>
	<input type="text" name="floor_id" placeholder="Ex: 20 " required=required />
	</td>
	</tr>

	<tr>
	<td>Enter Floor Name</td>
	<td>
	<input type="text" name="floor_name" placeholder="Ex: Ground Floor " required=required />
	</td>
	</tr>

	
	<tr>
	
	<td colspan=2 align=center >
	<input type="submit" value=" Save Floor" />
	</td>
	</tr>
	
	</table>
	
	</form>
	
	
	<center>
	
		<a href="displayfloors.php">Display Floors</a>
	</center>
	</body>
	
	</html>