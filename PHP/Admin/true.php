<?php
	$id=$_GET['o_id'];
	
	$con=mysqli_connect("localhost","root","");
	
	mysqli_select_db($con,"admindb");
	
	$sql="DELETE FROM order_detail where order_id='$id'";
	
	mysqli_query($con,$sql);
	
	mysqli_close($con);
?>
<script>
	window.location="notification.php";
</script>