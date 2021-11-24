<?php

include_once('navbar.php');

include_once('db.php');

$review=$_REQUEST['review'];
$vid=$_REQUEST['vid'];

$sql="insert into reviews(vendor_id,mobno,review,rdate,name) values($vid,'$mobno','$review',curdate(),'$name')";

$res=execute( $sql );

echo "<center><h1>Thank you</h1></center>";

?>

