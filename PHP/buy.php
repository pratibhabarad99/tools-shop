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
<title>Buy Product</title>
<br>
<?php
	include "header.php";
	include "title.php";
	
	$sid=$_GET['sid'];
	$id=$_GET['id'];
	$cn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($cn,"admindb");

	$query = "SELECT `image` FROM `image` WHERE `id`='$id'";
    $fire = mysqli_query($cn,$query);
	
	while($row = mysqli_fetch_array($fire))
		{?>
		<fieldset style= "width:29%; margin-left:1.5%; margin-bottom:1.5%; float:left; border-radius:15px;">
				<div class="product-image-wrapper">
				<div class="single-products">
				<img height=450 width=100% src="uploads\<?php echo $row['image']; ?>"/>&nbsp;
			</fieldset><br><br>
			<form action="#" method="POST">
			<b style="color:white; font-size:25px; margin-left:69px;">
				Enter Your Name:
				<input type="text" name="nm" style="height:20px;width:300px;margin-left:159px"></b><br><br>;
			
			<b style="color:white; font-size:25px; margin-left:60px;">
				Enter Your Contact Number: 
				<input type="text" name="c_number" style="height:20px;width:300px;margin-left:34px"></b><br><br>;
			
			<b style="color:white; font-size:25px; margin-left:60px;">
				Enter Your Adress: 
				<input type="text" name="addr" style="height:100px;width:300px;margin-left:144px"></b><br><br>;
			<br><br>
			<input style="background-color:black;height:40px;width:100px;color:white;margin-left:300px;" type="submit" name="buy" value="BUY">
			</div></form>
		<?php } ?>

<!--  BUY    -->

<?php
	

	if(isset($_POST['buy']))
	{
		
		$name=$_POST['nm'];
		$number=$_POST['c_number'];
		$ad=$_POST['addr'];
		
		$q="INSERT INTO order_detail(pro_id,name,contact_no,address) VALUES('$id','$name','$number','$ad')";
		$c=mysqli_query($cn,$q);
		
		if($c)
		{
			?>
			<script>
				alert("Your order has been placed");
				window.location="main.php";
			</script>
			<?php
		}
	}
?>