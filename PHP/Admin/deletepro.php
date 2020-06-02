<?php
	$code=$_GET['pro_id'];
	
	$cn=mysqli_connect("localhost","root","");
	
	mysqli_select_db($cn,"admindb");
	
	$sql="delete from product where pro_id='".$code."'"; 
	
	mysqli_query($cn,$sql);
	
	?>
	<script>
	window.location="product.php";
	</script>
<?php
	mysqli_close($cn);
?>
