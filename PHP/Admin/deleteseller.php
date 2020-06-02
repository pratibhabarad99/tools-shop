<?php
	$code=$_GET['seller_id'];
	
	$cn=mysqli_connect("localhost","root","");
	
	mysqli_select_db($cn,"admindb");
	
	$sql="delete from seller where seller_id='".$code."'"; 
	
	mysqli_query($cn,$sql);
	
	?>
	<script>
	window.location="seller.php";
	</script>
<?php
	mysqli_close($cn);
?>