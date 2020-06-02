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
	height:50%;
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
	margin-top:100px;
    background-color: black; 
    color: white;
    padding: 15px;
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
<body>
<fieldset id="data">
<center>
<form action="#" method="POST">
	<input type="submit" name="s1" class="btn" value="Registration">
	<input type="submit" name="s2" class="btn" value="Sign In">
</form>
</center>
</fieldset>
</body>
</html>
<?php

	if(isset($_POST['s1']))
	{
		?>
		<script>
		window.location="sellerreg.php";
		</script>
	<?php
	}
	else if(isset($_POST['s2']))
	{
		?>
		<script>
		window.location="sellersignin.php";
		</script>
		<?php
	}
?>