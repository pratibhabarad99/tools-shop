<?php session_start(); 
  if(isset($_SESSION['admin'])==false)
  { ?><script>alert("login first"); window.location="AdminLogin.php";</script><?php } ?>
<?php
	include "header.php";
	include "slide.php";
?>
<title>Sub Category</title>
<div id="tabledatapro" style="margin-top:-655px;">
	<h1 align="center">Sub Category</h1>
<table border="2" width="70%" align="center" style="background-color:black; color:white;" cellpadding="8px" cellspacing="10px">
	<tr>
    	<td>Category_Id</td>
    	<td>Sub_Category_Id</td>
		<td>Sub_Category_Name</td>
    </tr> 
    <br>
<?php
	$cn=mysqli_connect("localhost","root","");
	
	$db=mysqli_select_db($cn,"admindb");
	
	$sql="select * from sub_category";
	
	$q=mysqli_query($cn,$sql);
	
	while($ans=mysqli_fetch_array($q))
	{
		$id=$ans[0];
		$sid=$ans[1];
		$name=$ans[2];
?>
	<tr>
		<td><?php echo $id;?></td>
	
    	<td><?php echo $sid;?></td>
		
		<td><?php echo $name;?></td>
       
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
</body>
</html>