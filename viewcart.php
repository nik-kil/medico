<?php

	include_once('navbar.php');
	
	include_once('db.php');
	
	//echo $mobno;
	
	$sql="select o.slno as slno,item_name,item_image,o.cost as cost,o.qty as qty ,o.vid as vid from orders o,items i where( i.slno=o.itemid and i.vid=o.vid and  customer_mobno='$mobno' and status='selected' )";
	
	$res=execute( $sql );
	
	$row=$res->fetch_object();
	
	
	if( !$row )
	{
		echo "<div class=' '><center><h2>No information found !!</h2></center></div>";
		exit(0);
	}
	
	$res=execute( $sql );
	
	$vid="";
?>

<div class="container bg-info text-danger" >

<h2>Order Details</h2>

<div class="row" >
<div class="table-responsive"  >

<table aling=center class="table table-condensed ">

<tr class="bg-success" style="color:black;">
<th>Slno</th><th>Item</th><th>Qty</th><th>Cost</th><th>Amount</th><th>Remove</th>
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

echo "<td><a href='deleteselitem.php?slno=$row->slno'>Delete</a></td>";


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
<a href="placeorder.php?vid=<?php echo $vid ?>&amount=<?php echo $total_amount ?>" class="btn btn-danger btn-lg" >Place Order</a>
</center>
</br>

</div>
</div>
</div>

