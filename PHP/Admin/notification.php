<?php session_start(); 
  if(isset($_SESSION['admin'])==false)
  { ?><script>alert("login first"); window.location="AdminLogin.php";</script><?php } ?>
<?php
	include "header.php";
	include "slide.php";
?>
<style>
	#tabledata{
		height: inherit;
	}
</style>
<title>Notifications</title>
<div id="tabledata" style="margin-top:-660px;">
	<h1 align="center">Notification</h1>
	
	<table border="2" width="90%" align="center" style="background-color:black; color:white;" cellpadding="10px" cellspacing="10px">
	<tr>
    	<td>Product Id</td>
		<td>Order Id</td>
		<td>Image</td>
		<td>Price</td>
		<td>Name</td>
		<td>Contact</td>
		<td>Address</td>
		<td>Action</td>
    </tr> 
    <br>
	
<?php
	$cn=mysqli_connect("localhost","root","");
	
	$db=mysqli_select_db($cn,"admindb");
	
	$sql="select * from order_detail";
	
	$q=mysqli_query($cn,$sql);
	
	while($ans=mysqli_fetch_array($q))
	{
		$id = $ans['pro_id'];
		$sql2 = "select * from product where pro_id='$id'";
		$q2=mysqli_query($cn,$sql2);
		$ans2 = mysqli_fetch_array($q2);
		?>
		<tr>
		<td><?php echo $ans[0]; ?></td>
	
    	<td><?php echo $ans[1]; ?></td>
		
		<td><img height=120 width=100 src="../uploads/<?php echo $ans2[2]; ?>"/></td>
		
		<td><?php echo $ans2[3]; ?></td>
		
		<td><?php echo $ans[2]; ?></td>
		
		<td><?php echo $ans[3]; ?></td>
		
		<td><?php echo $ans[4]; ?></td>
	 	
		<td> <button style="background-color:black;"><a style="text-decoration:none;color:white;" onClick="return confirm('Are you sure you want to delete?')" href="true.php?o_id=<?php echo $ans[1]; ?>">Delete</a></button></td>
		</td>
		
		</tr><?php
	}
?>
	   
<?php

    $rec=mysqli_num_rows($q);
	
		mysqli_close($cn);
?>
</table><br><br>
</div>
