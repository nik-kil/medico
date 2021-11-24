
	<?php
	
		include_once('vendornavbar.php');
		
		include_once('db.php');
		
		$status=$_REQUEST['status'];
		$id=$_REQUEST['id'];
		$mobno=$_REQUEST['mobno'];
		
		$message="";
		
		if( $status=="av" )
		{
			$message="The product is available,it will be packed soon";
			$status="avilable";
		}
		else if( $status=="nav")
		{
			$message="Sorry, the products you are requesting are not avilable";
			$status="not avilable";
		}
		
		$sql="insert into replies(repid,mobno,message,sender,vendorid,ctime,status) values($id,'$mobno','$message','$trade_name','$user_name',curtime(),'$status')";
		
		$res=execute( $sql );
		
		echo "<div class='container bg-info'><center><br/><a href='showprescriptionsvendors.php' class='btn btn-primary'>Return</a></center></div>";
		
		$sql="update prescriptions set status='$status',vendor='$user_name' where id=$id";
		$res=execute( $sql );
		
		?>