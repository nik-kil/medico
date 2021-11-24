<?php

	include_once('navbar.php');
	include_once('db.php');
	
	$vid=$_REQUEST['vid'];
	
	$sql="select * from vendors where vendor_id=$vid";
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	

?>


	<script>
	$(document).ready( function(){
	
		$("#review").load("loadreviews.php",{vid: <?php echo $vid ?> });
		
		
		//$("#review").html("hello");
		
	});
	</script>


<div class="container text-danger" style="background-color:honeydew;" >

	<div class="col-xs-12 text-info" >
	<h2>About</h2>
	<p>
	<?php echo $row->about ?>
	</p>
	</div>
<table class="table">

<tr>
<td colspan=2 align=center >
<img src="img/<?php echo $row->logo ?>"  class="img img-responsive" />
</td>
</tr>


<tr>
<td>
Address
</td>
<td>
<a href=<?php echo "$row->floor" ?> ><?php echo $row->floor ?></a>
</td>
</tr>



<tr>
<td>
Contact No
</td>
<td>
<?php echo $row->contno ?>
</td>
</tr>
</table>
</div>



<?php
$sql="select * from offers where vendor_id=$vid";
$res=execute($sql);
$row=$res->fetch_object();


if( $row )
{
?>

<br/><br/>
<div class="container text-danger" >
<h1>Offers</h1>

<?php
$res=execute($sql);



while( $row=$res->fetch_object() )
{
?>
<div class="row" >
<div class="col-xs-8" >
<h4><?php echo $row->caption ?> </h4>

<img src="img/<?php echo $row->imgname ?>" class="img img-responsive" />

</div>

<div class="col-xs-4" >
<p>
<?php echo $row->det ?>
</p>

</div>

</div>
<?php
}
?>

</div>

<?php
}
?>


<br/><br/>

<div class="container" >

<h1>New Arrivals</h1>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators 
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol> -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
   
   
	<?php
	$sql="select * from newarrivals where vendor_id=$vid";
	//echo $sql;
	$res=execute($sql);
	$row=$res->fetch_object();
	
	if( !$row )
	{
		echo "<center><h2>Coming soonn..</h2></center>";
		
	}else{
	
	?>
	
	<div class="item active">
      <img src="img/<?php echo $row->imgname ?>" alt="...">
      <div class="carousel-caption text-danger">
        <font color=green><?php echo $row->caption ?></font>
      </div>
    </div>
	
	<?php
	while( $row=$res->fetch_object() )
	{
	//echo $row->imgname;
	?>
    <div class="item">
      <img src="img/<?php echo $row->imgname ?>" alt="...">
      <div class="carousel-caption">
        <?php echo $row->caption ?>
      </div>
    </div>
    
	<?php
	}
	?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <?php } ?>



</div>
<br/><br/>


<div class="container bg-success" id="review" >

</div>


<br/><br/><br/>
<div class="container bg-info"  style="border:1px solid black; padding:10px;" >
<h2>Post your Review</h2>

<form name="f1" action="savereview.php"  class="f1" >
<input type="hidden" name="vid" value=<?php echo $vid ?> />
<textarea name="review" placeholder="Enter Review" required=required ></textarea>
<br/><br/>

<input type="submit" value="Post Review" class="btn btn-danger btn-lg"  <?php if( !isset($mobno) ){ ?> disabled=disabled <?php } ?> />
</form>


<?php
if( !isset($mobno) )
{
	echo "<b>You must <a href=login.php>Login</a> to post a review</b>";
}
?>
</div>

<br/><br/>