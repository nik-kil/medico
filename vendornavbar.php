


<?php

	session_start();
	if( isset( $_SESSION['user_name'] ) )
	{
		$user_name=$_SESSION['user_name'];
		$vendor_name=$_SESSION['vendor_name'];
		$trade_name=$_SESSION['trade_name'];
		$vendor_id=$_SESSION['vendor_id'];
		
	}
	else
	{
		
		echo "<body bgcolor=peru><div class='bg-danger'><center><img src='img/unauth.jpg' /><h1>Unauthorized Access is Denied </h1><h3>Please <a href=adminlogin.php>Login</a> to Continue</h3></center></div></body>";
		
		exit(0);
	}
	
	


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Vendor Home Page</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  
  
	<script src="jquery-3.3.1.js" >
	</script>
	
	
	<script src="js/bootstrap.min.js" >
	</script>
	
	
	
	<style>


	body{

	background-image:url(img/bgi2.jpg);
	background-size:cover;
	background-repeat:no-repeat;
	}
</style>
	
	
    </head>
	
	<body style="background-color:#c9ced1" >
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="vendorhomepage.php"><strong>Vendor Dashboard</strong></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
		
		
		 <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Orders <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="vieworders.php">New orders</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="seldate.php">Delivered orders</a></li>
           </ul>
        </li>
		
		
		
		
		
		
		
        <li><a href="showreviews.php">Users Reviews</a></li>
		
		
		<li><a href="showprescriptionsvendors.php"><span class="glyphicon glyphicon-user"></span>&nbsp;View Prescriptions</a></li>
		
		
		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Offers <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addoffers.php">Add New</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="viewoffers.php">View</a></li>
           </ul>
        </li>
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">New Arrivals <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addnewarrivals.php">Add New</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="viewnewarrivals.php">View</a></li>
           
					
          </ul>
        </li>
		
		
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Items <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addnewitem.php">Add New</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="viewitems.php">View</a></li>
           
					
          </ul>
        </li>
		
		<li>
		<a href="editabout.php">Edit About</a>
		</li>
		
		
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
		  
			 <li class="danger"  style="background-color:honeydew; color:green;"><a href=# style="color:green;" >Vendor Name : <?php echo $vendor_name ?> </a> </li>
			 
			  <li role="separator" class="divider"></li>
			  
			  <li class="danger"  style="background-color:honeydew; color:green;"><a href=# style="color:green;" >Trade: <?php echo $trade_name ?> </a> </li>
		   <li role="separator" class="divider"></li>
		  
            <li><a href="vendorlogout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	