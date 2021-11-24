<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Medico Mart</title>

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
	<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="adminhomepage.php"><strong>Admin Panel</strong></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="adminhomepage.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>
        <li><a href="showusers.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Registered Users</a></li>
		
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Vendors <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <!--  <li><a href="addnewvendor.php">Add New</a></li> 
            <li role="separator" class="divider"></li> -->
            <li><a href="viewvendors.php">View</a></li>
           
					
          </ul>
		  
		   <li><a href="showprescriptions.php"><span class="glyphicon glyphicon-user"></span>&nbsp;View Prescriptions</a></li>
		
        </li>
		
		
		<!--
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;Manage Floor Info <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addfloorinfo.php">Add </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="selfloor.php">View</a></li>
           
					
          </ul>
        </li>
		-->
		
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="adminlogout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	