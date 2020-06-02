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
}
.dropdownb:hover .dropbttn 
{
    background-color: purple;
}
</style>
</head>
<title>Products</title>
<br>
<?php
	include "header.php";
	include "title.php";

	$sid=$_GET['sid'];
	$id=$_GET['id'];
	$cn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($cn,"admindb");
	
		
	$query = "SELECT * FROM `image` WHERE `sid`='$sid' AND `image_id`='$id'";
	$fire = mysqli_query($cn,$query);

	while($image = mysqli_fetch_array($fire))
	{?>
		<fieldset style= "max-width:29%; margin-left:1.5%; margin-bottom:1.5%; float:left; border-radius:15px;">
		<div class="product-image-wrapper">
		<div class="single-products">
		<a href="display1pro.php?sid=1&id=<?php echo $image['id']; ?>"><img height=450 width=100% src="uploads/<?php echo $image['image']; ?>"/></a>&nbsp
		<b style="color:purple; font-family:arial; font-size:30px; margin-left:140px"></b>
		<center><div>
		<div class="dropdownb">
			<a href="buy.php?sid=1&id=<?php echo $image['id']; ?>" style="text-decoration: none; color:white">
			<button class="dropbttn">
				<strong>
					Buy Now
				</strong>
			</button></a><br><br>
		</div></center>
		</div>
		</div>
		</div>
		</fieldset>
		<?php
	}
	?>
<?php include "footer.php"; ?>
</html>