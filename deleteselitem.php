
	<?php
	
		
		session_start();
		$_SESSION['count']=$_SESSION['count']-1;
		
		$slno=$_REQUEST['slno'];
		
		include_once('navbar.php');
	
		include_once('db.php');
	
		$sql="delete from orders where slno=$slno";
		$res=execute( $sql );
		
		
		
		echo "<center><h2>Item got deleted</h2></center>";
		header('Location:viewcart.php');
		
	?>