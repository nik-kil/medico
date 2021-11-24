<?php
	
	session_start();
	unset( $_SESSION['name'] );
	unset( $_SESSION['mobno'] );
	
	header('Location:index.php?lo=y');

?>