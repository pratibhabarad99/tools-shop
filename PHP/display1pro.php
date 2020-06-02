<html>
<head>
<style>
.dropbttn 
{
    background-color: black;
    color: white;
    padding: 18px;
    font-size: 16px;
    border:solid;
    cursor: pointer;
	width:150px;
	border-radius:8px;
}
.dropdownb 
{
    position: relative;
    display: inline-block;
	margin-left:140px;
}
.dropdownb:hover .dropbttn 
{
    background-color: purple;
}
</style>
</head>
<title>Product</title>
<br>
<?php
	include "header.php";
	include "title.php";
	
	$sid=$_GET['sid'];
	$id=$_GET['id'];
	$cn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($cn,"admindb");

	$query = "SELECT * FROM `product` WHERE `pro_id`='$id'";
    $fire = mysqli_query($cn,$query);
	
	while($row = mysqli_fetch_array($fire))
		{?>
		<fieldset style= "max-width:29%; margin-left:1.5%; margin-bottom:1.5%; float:left; border-radius:15px;">
			<div class="product-image-wrapper">
			<div class="single-products">
			<img height=450 width=400 src="uploads\<?php echo $row['image']; ?>"/>&nbsp;
				<center><b style="color:white; font-family:arial; font-size:30px;"><?php echo $row['pro_name']; ?></b></center>
			<div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			</div>
			</div></div>
		</fieldset><br><br>
		<b style="color:white; font-size:25px; margin-left:143px">Product Name:	<?php echo $row['pro_name']; ?></b><br><br>;;
		<b style="color:white; font-size:25px; margin-left:129px">Quantity:  1</b><br><br>;;
		<b style="color:white; font-size:25px; margin-left:130px">Price:  Rs. <?php echo $row['price']; ?></b>
		<br><br><div class="dropdownb">
			<a href="buy.php?id=<?php echo $row['pro_id']; ?>" style="text-decoration: none; color:white">
			<button class="dropbttn">
				<strong>
					Buy Now
				</strong>
			</button></a>
		</div>
<?php } ?>

</html>
<?php
 include "footer.php";
?>