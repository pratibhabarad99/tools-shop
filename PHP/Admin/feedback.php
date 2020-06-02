<?php session_start(); 
  if(isset($_SESSION['admin'])==false)
  { ?><script>alert("login first"); window.location="AdminLogin.php";</script><?php } ?>
<?php
	include "header.php";
	include "slide.php";
?>
<title>Feedback</title>
<div id="tabledata" style="margin-top:-657px;">
	<h1 align="center">Feedback</h1>
<table border="2" width="70%" align="center" style="background-color:black; color:white;" cellpadding="10px" cellspacing="10px">
	<tr>
    	<td>Email_Id</td>
    	<td>User_Name</td>
		<td>Comment</td>
    </tr> 
    <br>
<?php
	$cn=mysqli_connect("localhost","root","");
	
	$db=mysqli_select_db($cn,"admindb");
	
	$sql="select * from comment";
	
	$q=mysqli_query($cn,$sql);
	
	while($ans=mysqli_fetch_array($q))
	{
		$eid=$ans[1];
		$unm=$ans[2];
		$cmnt=$ans[3];
?>
	<tr>
		<td><?php echo $eid;?></td>
	
    	<td><?php echo $unm;?></td>
		
		<td><?php echo $cmnt;?></td>
       
	</tr>   
	<?php
	}
    $rec=mysqli_num_rows($q);
	?>
    <?php
	mysqli_close($cn);
    ?>
</table>
</div>
</body>
</html>