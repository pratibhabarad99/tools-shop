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
<title>Seller Sign In</title>
<body>
<fieldset id="data">
	<form action="#" method="POST">
		<h1 style="margin-left:60px; color:white;"><b> SIGN IN </b></h1><br>
		<label><h3 style="margin-left:10px;"><b>User Name : </b></label>
		<input type="text" name="unm" placeholder="Enter UserName" style="width:300px; height:35px; border-radius:10px; margin-left:75px;"><br><br>
		</h3>
		<label><h3 style="margin-left:10px;"><b>Password : </b></label>
		<input type="password" name="pass" placeholder="Enter Password" style="width:300px; height:35px; border-radius:10px; margin-left:85px;"><br><br>
		</h3>
		<input style="margin-left:130px;" type="submit" name="signin" class="btn" value="SIGN IN">
	</form>
</fieldset>
</body>
</html>
<?php
	if(isset($_POST['signin']))
	{
		$conn=mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"admindb");
		
		$uname=$_POST['unm'];
		$pass=$_POST['pass'];
		
		$qry="select * from seller";
		$q=mysqli_query($conn,$qry);

		while($r=mysqli_fetch_array($q))
		{
			if($uname==$r['user_name'] && $pass==$r['password'])
			{
				?>
				<script>
				alert("Sign In Successfull");
				window.location="seller.php";
				</script>
				<?php
			}	
			else
			{
				?>
				<script>
				window.location="sellersignin.php";
				</script>
				<?php
			}
		}
	}
    mysqli_close($conn);
?>