<?php
	$code=$_GET['Category_id'];
	
	$con=mysqli_connect("localhost","root","");
	
	mysqli_select_db($con,"admindb");
	
	$sql="delete from category where Category_id='".$code."'"; 
	
	mysqli_query($con,$sql);
	
	mysqli_close($con);
?>
<script>
	window.location="category.php";
</script>