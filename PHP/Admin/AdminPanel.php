<?php session_start(); 
  if(isset($_SESSION['admin'])==false)
  { ?><script>alert("login first"); window.location="AdminLogin.php";</script><?php } ?>

<?php
	include "header.php";
	include "slide.php";
?>
<title>Admin Home Page</title>
<div id="tabledata" style="margin-top:-635px;">
	<br><br><br><center><h1>(:  Welcome <?php echo $_SESSION['admin']; ?>  :)</h1></center>
<div>
</body>
</html>