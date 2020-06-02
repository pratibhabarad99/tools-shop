<?php
	include "sellerfixed.php";
?>
<div id="tabledata">
	
	<form action="insert_pro.php" method="post" enctype="multipart/form-data">	
	&nbsp;&nbsp;&nbsp;&nbsp;<label><b>Category</b></label>
	<select style="width:200px; height:30px; border-radius:10px; margin-left:120px;" name="c_nm"><br><br>
		<option>Hand Tools</option>
		<option>Measurement tools</option>
		<option>Power tools</option>
		<option>Soldering tools</option>>
	</select>
	<input style="color:white; background-color:black; border-radius:8px; height:40px; width:100px;" type="submit" name="submit" value="Next"><br><br><br>
	</form>
</div>