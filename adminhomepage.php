


<?php

	session_start();
	
	if( ! isset( $_SESSION['admin'] ) )
	{
		echo "<center><h2>You must <a href='adminlogin.php' class='btn btn-danger btn-sm' > login </a> to continue...</h2></center>";
		exit(0);
	}
	
	include_once('adminnavbar.php');


?>