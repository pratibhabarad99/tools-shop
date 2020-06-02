<?php
	include "sellerfixed.php";
?>
<div id="tabledata">
	<h1 align="center">Insert Product</h1>
<?php
	if(isset($_POST["submit"]))
	{
	$cat=$_POST["c_nm"];
	
	$cn=mysqli_connect("localhost","root","");
	
	$db=mysqli_select_db($cn,"admindb");
	
	$sql="select Category_id from category where Category_name='$cat'";
	
	$q=mysqli_query($cn,$sql); 

	$p=mysqli_fetch_row($q);
	
	$sql="select sub_category_name from sub_category where category_id='$p[0]'";
	$catid=$p[0];	
	$q=mysqli_query($cn,$sql);
		echo "<form method='post'>";
		echo "&nbsp;&nbsp;&nbsp;&nbsp;<b>Sub_Category_Name:</b> <select style='width:200px; height:30px; border-radius:10px; margin-left:33px;' name='name'>";
		while($p=mysqli_fetch_array($q))
		{
			echo "<option>$p[0]</option>";
		}
		echo "</select>";
		echo "<input type='hidden' value='$catid' name='catid'>";
		echo "&nbsp;<input style='color:white; background-color:black; border-radius:8px; height:40px; width:100px;' type='submit' name='submit2' value='Next'><br><br>";	
		echo "</form>";
	}


if(isset($_POST['submit2']))
{
	
	$cn=mysqli_connect("localhost","root","");
	$nm=$_POST["name"];
	
	$db=mysqli_select_db($cn,"admindb");
	$catid=$_POST["catid"];
	echo "<form action='#' method='post' enctype='multipart/form-data'>
	&nbsp;&nbsp;&nbsp;&nbsp;<label><b>Pro_Name</b></label>
	<input type='text' style='width:200px; height:30px; border-radius:10px; margin-left:60px;' name='p_nm'><br><br>
	
	<input type='hidden' value='$nm' name='name'>
	<input type='hidden' value='$catid' name='catid'>
	
    &nbsp;&nbsp;&nbsp;&nbsp;<label><b>Image</b></label>
    <input type='file' style='width:200px; height:30px; border-radius:10px; margin-left:90px;' class='ibutton' name='fileToUpload' id='fileToUpload'><br><br>
	
	&nbsp;&nbsp;&nbsp;&nbsp;<label><b>Price</b></label>
	<input type='text' style='width:200px; height:30px; border-radius:10px; margin-left:95px;' name='price'><br><br>
	<br>
	
	&nbsp;&nbsp;&nbsp;&nbsp;<label><b>Quantity</b></label>
	<input type='text' style='width:200px; height:30px; border-radius:10px; margin-left:69px;' name='qnty'><br><br>
	<br>
	
	&nbsp;&nbsp;&nbsp;&nbsp;<label><b>Detail</b></label>
	<input type='text' style='width:200px; height:30px; border-radius:10px; margin-left:89px;' name='detail'><br><br>
	<br>
	
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type='submit' style='color:white; background-color:black; border-radius:10px; height:50px; width:120px;' name='s2' value='Upload'></form>";
	
}
if(isset($_POST['s2']))
{
		
		$cn=mysqli_connect("localhost","root","");
	
		$db=mysqli_select_db($cn,"admindb");
		
		$tmpname = $_FILES["fileToUpload"]["name"];
		move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"uploads/".$tmpname);
		$nm=$_POST["name"];
		$p_name=$_POST['p_nm'];
		$p_price=$_POST['price'];
		$p_qnty=$_POST['qnty'];
		$p_detail=$_POST['detail'];
		
		
		$sid="select Sub_Category_Id from sub_category where Sub_Category_name='".$nm."'";
		
			
		$qry=mysqli_query($cn,$sid);
		
		$s_id=mysqli_fetch_row($qry);
	
		$insert="INSERT into product (pro_name,image,price,quantity,details,Sub_Category_id,Category_id) values('".$p_name."','".$tmpname."','".$p_price."','".$p_qnty."','".$p_detail."','".$s_id[0]."','".$_POST['catid']."')";
		$c=mysqli_query($cn,$insert);
		$id = 5;
		$insert2="INSERT into image (sid,image_id,image) values('".$sid."','".$id."','".$tmpname."')";
		$c2=mysqli_query($cn,$insert2);
		
		if($c&&$c2)
		{
			?>
				<script>
				alert("Product Uploaded Succesfully ...");
				window.location="seller.php";
				</script>
				<?php
		}
		else
		{
			?>
			<script>
				alert("Product not Uploaded");
				window.location="seller.php";
			</script>
			<?php
		}
	mysqli_close($cn);
}
?>
</div>
</body>
</html>