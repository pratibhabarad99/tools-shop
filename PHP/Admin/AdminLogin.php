<?php
session_start();
	if(isset($_POST['sbtn']))
	{
		$un=$_POST['user'];
		$pw=$_POST['password'];
		
		$conn=mysqli_connect("localhost","root","");
		mysqli_select_db($conn, "admindb");
		
		$q="select * from login where  Uname='".$un."' AND Password='".$pw."'";
		$c=mysqli_query($conn, $q);
		$r=mysqli_num_rows($c);
		
		if($r>=1)
		{
			$_SESSION['admin']=$un;
			?>
        <script>
			window.location="AdminPanel.php";
		</script>
        <?php	
		}
		else
		{
			?>
			<script>
			 alert("Enter Valid Username Password");
			</script>
			<?php
		}
	
	} 
?>
<html>
<head>
<title>AdminLogin</title>
<style>
body
{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}
.body
{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-color:black;
	background-size: cover;
	-webkit-filter: blur(5px);
	z-index: 0;
}
.grad
{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}
.header
{
	position: absolute;
	top: calc(50% - 35px);
	left: calc(50% - 255px);
	z-index: 2;
}
.header div
{
	float: left;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 35px;
	font-weight: 200;
}
.header div span{
	color: #800080 !important;
}
.login
{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}
.login input[type=text]
{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}
.login input[type=password]
{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}
.button 
{
	width: 250px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: black;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}
}
</style>
</head>

<body>
  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Admin<span>Login</span></div>
		</div>
		<br>
		<form action="#" method="POST">
		<div class="login">

				<input type="text" placeholder="username" name="user" required><br>
				<input type="password" placeholder="password" name="password" required><br>
				<input type="submit" class="button" value="Login" name="sbtn">
		</div>
		</form>
</body>
</html>