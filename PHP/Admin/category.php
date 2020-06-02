<?php
	include "header.php";
	include "slide.php";
?>
<title>Category</title>
<div id="tabledata" style="margin-top:-655px;">
	<h1 align="center">Category</h1>
<table border="2" width="70%" align="center" style="background-color:black; color:white;" cellpadding="10px" cellspacing="10px">
	<tr>
    	<td>Category_ID</td>
    	<td>Category_Name</td>
    </tr> 
    <br>
<?php
	$cn=mysqli_connect("localhost","root","");
	
	$db=mysqli_select_db($cn,"admindb");
	
	$sql="select * from category";
	
	$q=mysqli_query($cn,$sql);
	
	while($ans=mysqli_fetch_array($q))
	{
		$id=$ans[0];
		$name=$ans[1];
?>
	<tr>
		<td><?php echo $id;?></td>
	
    	<td><?php echo $name;?></td>
       
	</tr>   
	<?php
	}
    $rec=mysqli_num_rows($q);
	?>
    <?php
    ?>
</table><br><br><br>
<center><form action="#" method="post">
	<input type="text" name="cat" placeholder="Add new category" style="height: 25px;width: 200px;padding-left: 5px;border:1px solid white;" /> <input type="submit" name="add" value="Add" style="height: 25px;background-color: white;border:1px solid white;"/>
</form></center>
</div>
</body>
</html>

<?php
if(isset($_POST['add']))
{
	$cat = $_POST['cat'];
	$query = "INSERT INTO category(Category_name) VALUES('$cat')";
	$fire = mysqli_query($cn,$query) or die("Cant insert data into database".mysql_error($cn));
		mysqli_close($cn);

	header("location:category.php");
}
?>