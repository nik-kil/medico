<?php

	include_once('vendornavbar.php');
	
	include_once('db.php');
	
	$order_date=$_REQUEST['order_date'];
	
	
?>



<?php

	$sql="select distinct order_id,name,o.customer_mobno as mobno,addr from orders o,signup s where (o.customer_mobno=s.mobno and o.status='delivered'  and order_date='$order_date' )";
	$res1=execute( $sql );
	
	
	$row1=$res1->fetch_object();
	
	if( !$row1 )
	{
		echo "<div class='bg-success text-dagner'><h2><center>Sorry no information found</h2></center></div>";
		exit(0);
	}
	
	$res1=execute( $sql );
	
	
	while( $row1=$res1->fetch_object() )
	{

	
	$sql="select o.slno as slno,item_name,item_image,o.cost as cost,o.qty as qty ,o.vid as vid from orders o,items i where( i.slno=o.itemid and i.vid=o.vid  and status='delivered' and o.vid=$vendor_id and o.order_id='$row1->order_id' )";
	
	//echo $sql;
	$res=execute( $sql );
	
	$vid="";

?>

<div class="container bg-info text-danger" >

<h2>Delivery Details</h2>

<div class="bg-danger"  style="color:black;" >
<?php 
echo "<b>$row1->name<br/>$row1->mobno</b><br/>";
echo "<i><p>$row1->addr</p></i>";
?>
</div>
<div class="row" >
<div class="table-responsive"  >

<table aling=center class="table table-condensed ">

<tr class="bg-success" style="color:black;">
<th>Slno</th><th>Item</th><th>Qty</th><th>Cost</th><th>Amount</th>
</tr>

<?php
$sino=1;
$total_amount=0;

while( $row=$res->fetch_object() )
{

$vid=$row->vid;
echo "<tr>";

echo "<td>$sino</td>";
echo "<td>$row->item_name</td>";
echo "<td>$row->qty</td>";
echo "<td>$row->cost</td>";
$amount=$row->qty * $row->cost;

$total_amount=$total_amount+$amount;
echo "<td>$amount</td>";

//echo "<td><a href='deleteselitem.php?slno=$row->slno'>Delete</a></td>";


echo "</tr>";

$sino=$sino+1;
}
?>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><b style="color:blue;">Total  : <?php echo $total_amount ?></b></td>
<td></td>
<td>&nbsp;</td>


</tr>
</table>

<br/>
<center>

<input type="button" value="Print" class="btn btn-lg btn-primary"  onclick="window.print(this);" />
&nbsp;&nbsp;

</center>
</br>

</div>
</div>
</div>

<hr/>
<?php
}
?>

