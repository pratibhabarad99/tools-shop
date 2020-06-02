<?php
  include "header.php";
  include "title.php";
?>
<html>
<head>
<style>
#data
{
	margin-top:0px;
	margin-left:0%;
	width:95%;
	height:80%;
	padding-top:20px;
	padding-left:50px;
	background-color:#696969;
	border-radius:15px;
}
#textbox
{
	width:300px;
	height:35px;
	border-radius:10px;
	margin-left:69px;
}
.btn 
{
	margin-left:50px;
    background-color: black; 
    color: white;
    padding: 18px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	width:150px;
	border-radius:8px;
}
.btn:hover 
{
    background-color: purple;
}
</style>
</head>
<title>Seller Registration</title>
<body>
<fieldset id="data">
	<form action="#" method="POST">
		<h1 style="margin-left:45px;color:white;"><b> SELLER REGISTRATION</b></h1><br><br>
		<label><h3><b>Seller Name : </b></label>
		<input type="text" name="snm" placeholder="Enter Your Company Name" style="width:300px; height:35px; border-radius:10px; margin-left:54px;"><br><br>
		</h3>
		<label><h3><b>User Name : </b></label>
		<input type="text" name="unm" placeholder="Enter Your Username" style="width:300px; height:35px; border-radius:10px; margin-left:62px;"><br><br>
		</h3>
		<label><h3><b>Password : </b></label>
		<input type="password" name="pass" placeholder="Password" style="width:300px; height:35px; border-radius:10px; margin-left:69px;"><br><br>
		</h3>
		<label><h3><b>E-mail Id : </b></label>
		<input type="text" name="eid" placeholder="Enter Your E-mail Id" style="width:300px; height:35px; border-radius:10px; margin-left:69px;"><br><br>
		</h3>
		<input type="submit" name="signup" class="btn" value="Register">
	</form>
</fieldset>
</body>
</html>
<?php
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"admindb");
		
	if(isset($_POST['signup']))
	{
		$conn=mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"admindb");
		
		$sname=$_POST['snm'];
		$uname=$_POST['unm'];
		$pass=$_POST['pass'];
		$e_id=$_POST['eid'];
		
		$q="insert into seller (seller_name,user_name,password,email_id) values ('".$sname."','".$uname."','".$pass."','".$e_id."')";
		$c=mysqli_query($conn,$q);
		
		if($q)
		{
			?>
			<script>
				window.location="sellersignin.php";
			</script>
			<?php
		}
	}
	mysqli_close($conn);
?>