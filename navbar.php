
<?php

	session_start();
	
	if( isset($_SESSION['mobno'] ) )
	{
		$mobno=$_SESSION['mobno'];
		$name=$_SESSION['name'];
		$count=$_SESSION['count'];
		
		
	}
	else
	$count=0;

?>

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
	
	padding-top:100px;
	
	background-image:url('img/bgi2.jpg');
	background-size:cover;
	background-repeat: no-repeat;
	 //background-attachment: fixed;
	//background-position: fixed;
	
	}
	
	
	#cart{
    vertical-align: top;
	padding-bottom:10px;
	margin-bottom:10px;
}
	</style>
	
    </head>
	
	<body style="background-color:#c9ced1" >
	<nav class="navbar navbar-default  navbar-fixed-top">
	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><strong>Medico Mart</strong></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>
        
		<?php
		if( isset($mobno) )
		{ 
		?>
		<li>
		<a href="viewcart.php">
		
		
		<span class="glyphicon glyphicon-shopping-cart"  ></span>
		<span id="cart">(<?php echo $count ?>)</span>
		</a>
		
		</li>
		
		
		<li>
		<a href="myorders.php">
		Myorders&nbsp;
		<span class=""  ></span>
	   </a>
		</li>
		
		
		
		
		<li>
		<a href="getpresription.php">
		
		Upload Prescritpion&nbsp;
		<span class="glyphicon glyphicon-envelope"  ></span>
	
		</a>
		
		</li>
		
		
		
		
		<?php
		}
		else
		{
		?>
		
		<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Users Registration</a></li>
		
		<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;User Login</a></li>
		
		<li><a href="addnewvendor.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Register as a vendor</a></li>
		
	  <li><a href="vendorlogin.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Vendor Login</a></li>
		
		
		<?php
		}
		?>
		
    
	  
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <!-- <button type="submit" class="btn btn-default btn-primary">Submit</button> -->
      </form>
	  
	  
	  
	  <?php
	  
	  if( isset($mobno) )
	  {
	  ?>
	  
	  <ul class="nav navbar-nav navbar-right">
	  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
	  </ul>
	  
	  <?php } ?>
	  <!--
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
	  
	  -->
	  
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php
if( isset($name) )
{
?>
<div class='container'>

<center>
<p  ><h2 style="color:#368B85; "><strong>Welcome <?php echo  $name ?></strong></h2></p>
</center>
</div>

<?php
}
else if( isset($_REQUEST['lo'] ) )
{
echo "<center><h3>Thank you</h3></center>";
}
?>
	