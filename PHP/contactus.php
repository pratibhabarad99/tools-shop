<?php
  include "header.php";
  include "title.php";
?>
<html>
<head>
<style>
#data
{
	margin-top:15px;
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
<title>Contact Us</title>
<body>
<fieldset id="data">
	<form action="#" method="POST">
		<h1 style="margin-left:50px;color:white;"><b> CONTACT US </b></h1><br><br>
		<label><h3><b>E-Mail ID : </b></label>
		<input type="text" name="eid" placeholder="Enter Your E-Mail Id" style="width:300px; height:35px; border-radius:10px; margin-left:69px;"><br><br>
		</h3>
		<label><h3><b>User Name : </b></label>
		<input type="text" name="uname" placeholder="Enter Your Username" style="width:300px; height:35px; border-radius:10px; margin-left:62px;"><br><br>
		</h3>
		<label><h3><b>Comment : </b></label>
		<input type="text" name="cmt" placeholder="Message" style="width:300px; height:100px; border-radius:10px; margin-left:69px;"><br><br>
		</h3>
		<input type="submit" name="submit" class="btn" value="Submit">
	</form>
</fieldset>
</body>
</html>
<?php
	$conn=mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"admindb");
	
	if(isset($_POST['submit']))
	{
		$e_id=$_POST['eid'];
		$u_nm=$_POST['uname'];
		$cmnt=$_POST['cmt'];
		
		$conn=mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"admindb");
		
		$q="insert into comment (email_id,user_name,cmnt) values ('".$e_id."','".$u_nm."','".$cmnt."')";
		$c=mysqli_query($conn,$q);
		
		if($c)
		{
			?>
			<script>
				alert("Message sent");
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				alert("Message not sent");
			</script>
			<?php
		}
	}
	mysqli_close($conn);
?>