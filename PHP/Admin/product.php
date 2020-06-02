<?php session_start(); 
  if(isset($_SESSION['admin'])==false)
  { ?><script>alert("login first"); window.location="AdminLogin.php";</script><?php } ?>
<?php
	include "header.php";
	include "slide.php";
?>
<title>Product</title>
<style type="text/css">
	input{padding-left: 5px;height: 30px;font-size: 14px;border: 1px solid white;background-color: white;margin-left: 5px;}
</style>
<div id="tabledatapro" style="margin-top:-657px;">
	<h1 align="center">Product</h1>
	<table align="center">
	<tr><form action="#" method="post" enctype="multipart/form-data">
    	<td>Add new tool: <input type="text" name="pronm" placeholder="Product name" style="width: 150px;" /></td>
		<td><input type="text" name="price" placeholder="Price" style="width: 60px;" /></td>
		<td><input type="text" name="qnty" placeholder="Quantity" style="width: 70px;" /></td>
		<td><input type="text" name="detail" placeholder="Product Detail"  style="width: 125px;" /></td>
		<td><input type="file" name="img" style="padding-top: 3px;padding-left: 3px;" /></td>
		<td><input type="submit" name="add" value="Add" style="background-color: black;color: white;width: 72px;font-size: 18px;" /></td>
    </form></tr> 
	</table>
<table border="2" width="90%" align="center" style="background-color:black; color:white;" cellpadding="10px" cellspacing="10px">
	<tr>
    	<td width="90">Product Id</td>
		<td>Product Name</td>
		<td>Price</td>
		<td>Quantity</td>
		<td>Details</td>
		<td>Delete</td>
    </tr> 
    <br>
<?php
	$cn=mysqli_connect("localhost","root","");
	
	$db=mysqli_select_db($cn,"admindb");
	
	$sql="select * from product";
	
	$q=mysqli_query($cn,$sql);
	
	while($ans=mysqli_fetch_array($q))
	{
		$id=$ans[0];
		$pro_name=$ans[1];
		$price=$ans[3];
		$quantity=$ans[4];
		$pro_detail=$ans[5];
?>
	<tr>
		<td><?php echo $id;?></td>
	
    	<td><?php echo $pro_name;?></td>
		
		<td><?php echo $price;?></td>
		
		<td><?php echo $quantity;?></td>
		
		<td><?php echo $pro_detail;?></td>
		
		<td> <button style="background-color:black; border-radius:5px;">
			<a style="text-decoration:none; color:white;" href="deletepro.php?pro_id=<?php echo $id;?>" onClick="return confirm('Are you sure you want to delete?')" >Delete</a>
			</button>
		</td>
    </tr>   
	<?php
	}
    $rec=mysqli_num_rows($q);
	?>
    <?php
		
	?>
</table><br><br>
</div>

<?php 
	if(isset($_POST['add']))
	{
		$pronm = $_POST['pronm'];
		$price = $_POST['price'];
		$qnty = $_POST['qnty'];
		$detail = $_POST['detail'];
		$img = $_FILES['img']['name'];

		$q = "INSERT INTO product(pro_name,image,price,quantity,details) VALUES('$pronm','$img','$price','$qnty','$detail')";
		$f = mysqli_query($cn,$q);
		static $sid = 1;
		$q = "INSERT INTO image(sid,image_id,image) VALUES(5,'$sid','$img')";
		$f = mysqli_query($cn,$q);
		$sid=$sid+1;

		move_uploaded_file($_FILES['img']['tmp_name'],"../uploads/".$img);
		header("location:product.php");
	}
	mysqli_close($cn);
?>