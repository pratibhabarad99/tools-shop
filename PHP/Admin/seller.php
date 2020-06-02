<?php session_start(); 
  if(isset($_SESSION['admin'])==false)
  { ?><script>alert("login first"); window.location="AdminLogin.php";</script><?php } ?>
<?php
	include "header.php";
	include "slide.php";
?>
<title>Seller</title>
<div id="tabledata" style="margin-top:-657px;">
	<h1 align="center">Seller</h1>
	<table border="2" width="90%" align="center" style="background-color:black; color:white;" cellpadding="10px" cellspacing="10px">
	<tr>
    	<td>Seller_Id</td>
		<td>Seller_Name</td>
		<td>User Name</td>
		<td>Email-ID</td>
		<td>Delete</td>
    </tr> <br>
			
<?php
	$cn=mysqli_connect("localhost","root","");
	
	$db=mysqli_select_db($cn,"admindb");
	
	$sql="select * from seller";
	
	$q=mysqli_query($cn,$sql);
	
	while($ans=mysqli_fetch_array($q))
	{
		$seller_id=$ans[0];
		$seller_name=$ans[1];
		$user_name=$ans[2];
		$email_id=$ans[4];
?>
	<tr>
		<td><?php echo $seller_id;?></td>
	
    	<td><?php echo $seller_name;?></td>
		
		<td><?php echo $user_name;?></td>
		
		<td><?php echo $email_id;?></td>
		
		<td> <button style="background-color:black; border-radius:5px;">
			<a style="text-decoration:none; color:white;" href="deleteseller.php?seller_id=<?php echo $seller_id;?>"onClick="return confirm('Are you sure you want to delete?')" >Delete</a>
			</button>
		</td>
	</tr> 
	<?php
	}
    $rec=mysqli_num_rows($q);
	?>
    <?php
		mysqli_close($cn);
	?>
</table><br><br>
</div>