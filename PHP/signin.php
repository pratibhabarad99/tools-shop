<br>
<?php
	include "header.php";
	include "title.php";
?>
<?php
//session_start();	
		$conn=mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"admindb");
		
if(isset($_POST['su_btn']))
{
		$conn=mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"admindb");
		
		$f=0;
		$unu=$_POST['u_nm'];
		$passu=$_POST['pssd'];
		$rpass=$_POST['rpsd'];
		$e_id=$_POST['e_add'];
		
		if($passu==$rpass)
		{
			$q="insert into sign_up (u_name,pass,e_id) values ('".$unu."','".$passu."','".$e_id."')";
			$c=mysqli_query($conn,$q);
			
			if($q)
				{
				?>
				<script>
				alert("Now You are Registered Customer");
				window.location="main.php";
				</script>
				<?php
				}
			else
			{
				?>
				<script>
				alert("Password Not Confirm");
				</script>
				<?php
			}
		mysqli_close($conn);
		}
}
else if(isset($_POST['si_btn']))
{	
	$un=$_POST['u_name'];
	$pass=$_POST['psd'];
	$qry="select * from sign_up";
	$q=mysqli_query($conn,$qry);
		
	while($r=mysqli_fetch_array($q))
	{
		if($un==$r['u_name'] && $pass==$r['pass'])
		{
			?>
			<script>
			alert("Sign In Successfull");
			window.location="main.php";
			</script>
			<?php
		}	
		else
		{
			?>
			<script>
			alert("Enter valid Username or Password");
			window.location="main.php";
			</script>
			<?php
		}
	}
    mysqli_close($conn);
}?>
<html>
<head>
  <title>Login Form</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="../CSS/signin.css">
</head>

<body style="color: white!important;">
<form action="#" method="POST" style="color: white;">
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="u_name">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="psd" data-type="password">
				</div>
				<br>
				<div class="group">
					<b><input type="submit" class="button" value="Sign In" name="si_btn"></b>
				</div>
				<div class="hr"></div>
				<!--<div class="foot-lnk">
					<a href="forgot.php">Forgot Password?</a>
				</div>-->
			</div> </form>
			<form action="#" method="POST">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input"  name="u_nm">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" name="pssd" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input"  name="rpsd" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input" name="e_add">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up" name="su_btn">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
 </form> 
</body>
</html>