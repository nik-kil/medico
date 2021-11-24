
<?php

include_once('vendornavbar.php');
include_once('db.php');


?>

<style>
input,select{

width:250px;
height:40px;
}
</style>
<body>

<div class="container text-danger bg-success" >

<h1>View Delivered Orders Form</h1>

<form name="f1" action="showdelorders.php" method="post" enctype="multipart/form-data"   >

<table class="table table-striped" >

<tr>
<td>Select date</td>
<td>
<input type="date" name="order_date" required=required placeholder="Select date" />
</td>
</tr>

<tr>
<td colspan=2 align=center >
<input type="submit" value=" Display orders" class="btn btn-primary"  name="submit" />
</td>
</tr>
</table>


</form>
</div>

</body>

</html>